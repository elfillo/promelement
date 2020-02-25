$(document).ready(function () {
    // Замените на свой API-ключ
    //T4qxU@ku29cVFgp password
    // 77.243.116.0 - Иркутск
    $('#checkIp').click(function () {
        var token = "65ccc4d1440e369f8cd09388c59c1adc71cdd5bb";

        function iplocate(ip) {
            var serviceUrl = "https://suggestions.dadata.ru/suggestions/api/4_1/rs/iplocate/address";
            if (ip) {
                serviceUrl += "?ip=" + ip;
            }
            var params = {
                type: "GET",
                contentType: "application/json",
                headers: {
                    "Authorization": "Token " + token
                }
            };
            return $.ajax(serviceUrl, params);
        }

        function detect() {
            var ip = $("#ip").val();
            iplocate(ip).done(function(response) {
                $("#suggestions").text(JSON.stringify(response, null, 4));
                console.log(response);
                if(response.location != null){
                    console.log(response.location.data.city, 'city');
                }
            })
                .fail(function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus);
                    console.log(errorThrown);
                });
        }

        //$("#ip").on("change", detect);

        detect();
    });

    function checkIpLocalStorage() {
        let location = window.localStorage.getItem('location');
        console.log(location, 'location');
        if(location === null){
            console.log('get location');
            getUserIp();

        }
    }

    function getUserIp() {
        $.ajax({
            url: '/wp-admin/admin-ajax.php',
            data: {
                action: 'get_user_ip',
            },
            type: 'POST',
            success: function (res) {
                console.log(res, 'ip');
            },
            error: function (res) {
                console.log(res, 'err')
            }
        });
    }

    checkIpLocalStorage();
});