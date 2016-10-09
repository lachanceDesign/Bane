<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
    function e() {
        i = new google.maps.DirectionsRenderer;
        var e = new google.maps.LatLng(42.217711, -71.994513),
            n = {
                zoom: 9,
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
                l.setContent(
                  '<div class="infoWindow"><a style="text-decoration:none;" href="' + t[n].link + '"><img style="width:200px;float:left;margin-right:15px;" src ="apps/_ee/files/' + t[n].img + '" class="centerImg"><div id="bodyContent"><h4 id="firstHeading" class="fancy">' + t[n].name + "</h4><p>" + t[n].add + "<br>" + t[n].phn + "<br>View Facility</p></div></a></div>"), l.open(a, e)
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
                duxbury: {
                    name: "Bay Path Rehabilitation & Nursing Center",
                    lat: 42.031616,
                    lng: -70.741473,
                    img: "Bay-Path-EXT.jpg",
                    add: "308 Kings Town Way, Duxbury, MA 02332",
                    phn: "781-585-5561",
                    link: "/Bay-Path-skilled-nursing-home-rehabilitation"
                },
                weymouth: {
                    name: "Colonial Rehabilitation & Nursing Center",
                    lat: 42.2163766,
                    lng: -70.9629449,
                    img: "Colonial-EXT.jpg",
                    add: "125 Broad Street, Weymouth, MA 02188",
                    phn: "781-337-3121",
                    link: "/Colonial-skilled-nursing-home-rehabilitation"
                },
                quincy: {
                    name: "Hancock Park Rehabilitation & Nursing Center",
                    lat: 42.245157,
                    lng: -71.0050613,
                    img: "hancockpark-ext.jpg",
                    add: "164 Parkingway, Quincy, MA 02169",
                    phn: "617-773-4222",
                    link: "/Hancock-Park-skilled-nursing-home-rehabilitation"
                },
                hingham: {
                    name: "Harbor House Rehabilitation & Nursing Center",
                    lat: 42.252628,
                    lng: -70.909528,
                    img: "harborhouse-ext.jpg",
                    add: "11 Condito Road, Hingham, MA 02043",
                    phn: "781-749-4774",
                    link: "/Harbor-House-skilled-nursing-home-rehabilitation"
                },
                braintree: {
                    name: "John Scott House Rehabilitation & Nursing Center",
                    lat: 42.217711,
                    lng: -70.994513,
                    img: "john-scott-house-ext.jpg",
                    add: "233 Middle Street, Braintree, MA 02184",
                    phn: "781-843-1860",
                    link: "/John-Scott-House-skilled-nursing-home-rehabilitation"
                },
                mayflower: {
                    name: "Mayflower Place",
                    lat: 41.660839,
                    lng: -70.2612147,
                    img: "mayflower-EXT.jpg",
                    add: "579 Buck Island Road, West Yarmouth, MA 02673",
                    phn: "1-800-245-8389",
                    link: "/Mayflower-Place-skilled-nursing-home-rehabilitation"
                },
                brighton: {
                    name: "Brighton House Rehabilitation & Nursing Center",
                    lat: 42.343321,
                    lng: -71.141831,
                    img: "brighton-house-ext.jpg",
                    add: "170 Corey Road, Brighton, MA 02135",
                    phn: "617-731-0515",
                    link: "/Bay-Path-skilled-nursing-home-rehabilitation"
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
