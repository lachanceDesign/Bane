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
              lynn: {
                  name: "Abbott House Skilled Nursing Home & Rehabilitation",
                  lat: 42.475125,
                  lng: -70.929498,
                  img: "abbott-house-ext.jpg",
                  add: "28 Essex Street, Lynn, MA 01902",
                  phn: "781-595-5500",
                  link: "/Abbott-House-skilled-nursing-home-rehabilitation"
              },
              marblehead: {
                  name: "Devereux House Skilled Nursing Home & Rehabilitation",
                  lat: 42.493975,
                  lng: -70.877438,
                  img: "devereux-house-ext.jpg",
                  add: "39 Lafayette Street, Marblehead, MA 01945",
                  phn: "781-631-6120",
                  link: "/Devereux-House-skilled-nursing-home-rehabilitation"
              },
              peabody: {
                  name: "Rosewood Skilled Nursing Home & Rehabilitation",
                  lat: 42.546687,
                  lng: -70.995161,
                  img: "Rosewood-EXT.jpg",
                  add: "22 Johnson Street, W. Peabody, MA 01960",
                  phn: "978-535-8700",
                  link: "/Rosewood-skilled-nursing-home-rehabilitation"
              }
            };
        google.maps.event.addDomListener(window, "load", e), $(".GetDirectionButton").click(function() {
            console.log("im clicked");
            var e = $("#startAddress").val(),
                i = $("#centerChosen").val();
            "" != e && "" != i ? (n(e, i), $("#directions").slideToggle("fast"), $("#printDirectionButton").toggle()) : alert("Please enter both the starting address and the destination center")
        }), $("#printDirectionButton").click(function() {
            return window.print(), !1
        })
    });
</script>
