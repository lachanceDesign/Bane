<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
    function e() {
        i = new google.maps.DirectionsRenderer;
        var e = new google.maps.LatLng(42.493975, -70.877438),
            n = {
              zoom: 10,
              scrollwheel: !1,
              center: e,
              disableDefaultUI: !0,
              navigationControl: !0,
              navigationControlOptions: {
                  style: google.maps.NavigationControlStyle.SMALL,
                  position: google.maps.ControlPosition.LEFT_BOTTOM
              },
              zoomControl: !0,
              streetViewControl: !0,
              mapTypeId: google.maps.MapTypeId.ROADMAP
            },
            a = new google.maps.Map(document.getElementById("map_canvas"), n);
        i.setMap(a), i.setPanel(document.getElementById("directions"));
        var o, l = new google.maps.InfoWindow;
        for (var r in t) o = new google.maps.Marker({
            position: new google.maps.LatLng(t[r].lat, t[r].lng),
            map: a,
            draggable: !1
        }), google.maps.event.addListener(o, "click", function(e, n) {
            return function() {
                l.setContent('<div class="infoWindow"><a style="text-decoration:none;" href="' + t[n].link + '"><img style="width:200px;float:left;margin-right:15px;" src ="apps/_ee/files/' + t[n].img + '" class="centerImg"><div id="bodyContent"><h4 id="firstHeading" class="fancy">' + t[n].name + "</h4><p>" + t[n].add + "<br>" + t[n].phn + "<br>View Facility</p></div></a></div>"), l.open(a, e)
            }
        }(o, r))
    }

    function n(e, n) {
        var o = t[n].add,
            l = {
                origin: e,
                destination: o,
                travelMode: google.maps.TravelMode.DRIVING
            };
        a.route(l, function(e, n) {
            n == google.maps.DirectionsStatus.OK ? i.setDirections(e) : alert("Address not found, please try again.")
        })
    }
    var i, a = new google.maps.DirectionsService,
        t = {
                bostonian: {
                    name: "The Bostonian Skilled Nursing Home & Rehabilitation",
                    lat: 42.28778,
                    lng: -71.047121,
                    img: "the-bostonian-ext.jpg",
                    add: "337 Neponset Avenue Dorchester, MA 02122",
                    phn: "617-265-2350",
                    link: "/The-Bostonian-skilled-nursing-home-rehabilitation"
                },
                hyde: {
                    name: "Park Place Skilled Nursing Home & Rehabilitation",
                    lat: 42.260888,
                    lng: -71.120557,
                    img: "park-place-ext.jpg",
                    add: "113 Central Ave, Hyde Park, MA 02136",
                    phn: "617-361-2388",
                    link: "/Park-Place-skilled-nursing-home-rehabilitation"
                }
            };
            google.maps.event.addDomListener(window, "load", e), $(".GetDirectionButton").click(function() {
                var e = $("#startAddress").val(),
                    i = $("#centerChosen").val();
                "" != e && "" != i ? (n(e, i), $("#directions").slideToggle("fast"), $("#printDirectionButton").toggle()) : alert("Please enter both the starting address and the destination center")
            }), $("#printDirectionButton").click(function() {
                return window.print(), !1
            })
        });
</script>
