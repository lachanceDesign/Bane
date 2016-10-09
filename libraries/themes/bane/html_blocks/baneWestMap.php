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
                dalton1: {
                    name: "Craneville Place Skilled Nursing Home & Rehabilitation",
                    lat: 42.473039,
                    lng: -73.177508,
                    img: "cranesville-ext.jpg",
                    add: "265 Main Street, Dalton, MA 01226",
                    phn: "413-684-3212",
                    link: "/Craneville-Place-skilled-nursing-home-rehabilitation"
                },
                pittsfield: {
                    name: "Springside Skilled Nursing Home & Rehabilitation",
                    lat: 42.432487,
                    lng: -73.306289,
                    img: "springside-ext.jpg",
                    add: "255 Lebanon Avenue, Pittsfield, MA 01201",
                    phn: "413-499-2334",
                    link: "/Springside-skilled-nursing-home-rehabilitation"
                },
                dalton: {
                    name: "Sugar Hill Assisted Living Community",
                    lat: 42.474546,
                    lng: -73.183835,
                    img: "sugar-hill-ext.jpg",
                    add: "45 Main St, Dalton, MA 01226",
                    phn: "413-684-0100",
                    link: "/Sugar-Hill-assisted-living-home-rehabilitation"
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
