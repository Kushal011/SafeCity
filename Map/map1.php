<?php
echo "<html lang=\"en\">\n";
echo "<head>\n";
echo "<meta charset='utf-8' />\n";

echo "<title>Maps</title>\n";
echo "<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.css\"integrity=\"sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==\"crossorigin=\"\"/>\n";

echo "<script src=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.js\"integrity=\"sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==\"crossorigin=\"\"></script>\n";
 echo " <link href=\"css/style.css\" rel=\"stylesheet\">\n";
?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<?php
 echo "<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />\n";
 echo "<style>\n";
 echo "body { margin:0; padding:0; }\n";
 echo "#map { position:absolute; top:0; bottom:0; width:100%; }\n";
 echo "</style>\n";  
 echo "</head>\n";
?>
<body>
<div style="height: 70px;" id="topbar" >
        <header id="header">
                  <div class="container">
                <div class="logo float-left">
                <h1 class="text-light"><a href="./../Wbsource-login/index.php" class="scrollto"><span>SAFE CITY</span></a></h1>
                </div>
                 <nav class="main-nav float-right d-none d-lg-block">
                     <ul>
                      <li><a href="#">Submit a Tip</a></li>
                        <li class="active"><a href="#">Law Enforcement-Join Free</a></li>
    <li><a href="#footer">Contact Us</a></li>

</div>
<div id="mapid" style="width: 100%; height: 880px;"></div>

<script> var mymap = L.map('mapid').setView(new L.LatLng(23.2699,77.3926), 14);

var assaulticon = L.icon({
    iconUrl: './img/assault.png',
    iconSize: [30, 30],
    iconAnchor: [10, 15],
});
var burglaryicon = L.icon({
    iconUrl: './img/burglary.png',
    iconSize: [30, 30],
    iconAnchor: [10, 15],
});
var drunkicon = L.icon({
    iconUrl: './img/drunk.png',
    iconSize: [30, 30],
    iconAnchor: [10, 15],
});
var gunshoticon = L.icon({
    iconUrl: './img/gunshot.png',
    iconSize: [30, 30],
    iconAnchor: [10, 15],
});
var propertyicon = L.icon({
    iconUrl: './img/propertycrime.png',
    iconSize: [30, 30],
    iconAnchor: [10, 15],
});
var offenceicon = L.icon({
    iconUrl: './img/sexualoffence.png',
    iconSize: [30, 30],
    iconAnchor: [10, 15],
});
var thefticon = L.icon({
    iconUrl: './img/theft.png',
    iconSize: [30, 30],
    iconAnchor: [10, 15],
});

var policeicon = L.icon({
    iconUrl: './img/police.png',
    iconSize: [30, 30],
    iconAnchor: [10, 15],
});

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data � <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery � <a href="">Mapbox</a>',
		id: 'mapbox.streets'
	}).addTo(mymap);
   
    L.marker([23.265829,77.394202],{icon: assaulticon }).addTo(mymap).bindPopup("<b>Name:</b>Kali Basti</br><b><b>Address:</b>Peer Gate Area, Bhopal, Madhya Pradesh 462001</br><b></br><b>Type:</b>assault</br><b>");
    L.marker([23.265342,77.395452],{icon: gunshoticon }).addTo(mymap).bindPopup("<b>Name:</b>Noor Mahal Rd</br><b><b>Address:</b>Kali Basti, Peer Gate Area, Bhopal, Madhya Pradesh 462001<b></br><b>Type:</b>Gun Shot</br><b>");
    L.marker([23.2702032,77.383854],{icon: thefticon }).addTo(mymap).bindPopup("<b>Name:</b>  St Joseph's Rd</br><b><b>Address:</b>Idgah Hills, Bhopal, Madhya Pradesh 462001<b></br><b>Type:</b>Theft</br><b>");
    L.marker([23.274599,77.390152],{icon: propertyicon }).addTo(mymap).bindPopup("<b>Name:</b> Ram Nagar Colony </br><b><b>Address:</b>Idgah Hills, Bhopal, Madhya Pradesh 462001<b></br><b>Type:</b>Property Crime</br><b>");
    L.marker([23.274264,77.391493],{icon: assaulticon }).addTo(mymap).bindPopup("<b>Name:</b> Ram Nagar Colony </br><b><b>Address:</b>Idgah Hills, Bhopal, Madhya Pradesh 462001<b></br><b>Type:</b>Assault</br><b>");
    L.marker([23.266299,77.391417],{icon: gunshoticon }).addTo(mymap).bindPopup("<b>Name:</b> Kohefiza </br><b><b>Address:</b>Bhopal, Madhya Pradesh 462001<b></br><b>Type:</b>Gun Shot</br><b>");    
    L.marker([23.265311,77.384703],{icon: burglaryicon }).addTo(mymap).bindPopup("<b>Name:</b> De Faktory Hair Lounge </br><b><b>Address:</b>House no. B38 opposite jingle bell school Near state bank, Idgah Hills, Bhopal, Madhya Pradesh 462001<b></br><b>Type:</b>Burglary</br><b>");    
    L.marker([23.265765,77.382526],{icon: thefticon }).addTo(mymap).bindPopup("<b>Name:</b> 1-3, Ridge Rd </br><b><b>Address:</b>SBI Colony, Idgah Hills, Bhopal, Madhya Pradesh 462001<b></br><b>Type:</b>theft</br><b>");    
    L.marker([23.265262,77.381874],{icon: burglaryicon }).addTo(mymap).bindPopup("<b>Name:</b>Axis Bank ATM </br><b><b>Address:</b>House A6, Kohefiza, Bhopal, Madhya Pradesh 462001<b></br><b>Type:</b>Burglary</br><b>");    
    L.marker([23.263638,77.379795],{icon: assaulticon }).addTo(mymap).bindPopup("<b>Name:</b>Dr Kausar Clinic</br><b><b>Address:</b>C-66, opposite Little Angel School, BDA Colony, Kohefiza, Bhopal, Madhya Pradesh 462001<b></br><b>Type:</b>assault</br><b>");    
    L.marker([23.263089,77.384059],{icon: assaulticon }).addTo(mymap).bindPopup("<b>Name:</b> Main Rd </br><b><b>Address:</b>Idgah Hills, Bhopal, Madhya Pradesh 462001<b></br><b>Type:</b>Assault</br><b>");    
    L.marker([23.266839,77.386219],{icon: drunkicon }).addTo(mymap).bindPopup("<b>Name:</b>Shri Hanuman Gadi Temple </br><b><b>Address:</b>Ridge Rd, Idgah Hills, Bhopal, Madhya Pradesh 462001<b></br><b>Type:</b>Drunk</br><b>");    
    L.marker([23.267136,77.384434],{icon: drunkicon }).addTo(mymap).bindPopup("<b>Name:</b>Idgah Hills</br><b><b>Address:</b>Bhopal, Madhya Pradesh 462001<b></br><b>Type:</b>Drunk</br><b>");    
    L.marker([23.305092,77.333726],{icon: drunkicon }).addTo(mymap).bindPopup("<b>Name:</b>Pushp Vihar Colony </br><b><b>Address:</b>Gandhi Nagar, Bhopal, Madhya Pradesh 462030<b></br><b>Type:</b>Drunk</br><b>");    
    L.marker([23.301280,77.362003],{icon: assaulticon }).addTo(mymap).bindPopup("<b>Name:</b> New Central Jail</br><b><b>Address:</b>Gandhi Nagar, Bhopal, Madhya Pradesh<b></br><b>Type:</b>Assault</br><b>");    
    L.marker([23.311934,77.379295],{icon: offenceicon }).addTo(mymap).bindPopup("<b>Name:</b>Badwai </br><b><b>Address:</b>Bhopal, Madhya Pradesh<b></br><b>Type:</b>Sexual offence</br><b>");    
    L.marker([23.306433,77.374414],{icon: propertyicon }).addTo(mymap).bindPopup("<b>Name:</b>Abbas Nagar </br><b><b>Address:</b>Gandhi Nagar, Bhopal, Madhya Pradesh 462038<b></br><b>Type:</b>Property Crime</br><b>");    
    L.marker([23.302254,77.385915],{icon: offenceicon }).addTo(mymap).bindPopup("<b>Name:</b>Ayodhya Bypass Rd </br><b><b>Address:</b>Badwai, Bhopal, Madhya Pradesh 462038<b></br><b>Type:</b>Sexual offence</br><b>"); 
    L.marker([23.297998,77.353902],{icon: burglaryicon }).addTo(mymap).bindPopup("<b>Name:</b>Gandhi Nagar </br><b><b>Address:</b>Bhopal, Madhya Pradesh 462036<b></br><b>Type:</b>Burglary</br><b>");    
    L.marker([23.298274,77.380035],{icon: offenceicon }).addTo(mymap).bindPopup("<b>Name:</b>Mandir Marg </br><b><b>Address:</b>Sanjeev Nagar, Navri, Bhopal, Madhya Pradesh 462038<b></br><b>Type:</b>Sexual offence</br><b>");    
    L.marker([23.299614,77.378061],{icon: thefticon }).addTo(mymap).bindPopup("<b>Name:</b> Sanjeev Nagar </br><b><b>Address:</b>Navri, Bhopal, Madhya Pradesh 462038<b></br><b>Type:</b>Theft</br><b>");    
    L.marker([23.301071,77.389262],{icon: propertyicon }).addTo(mymap).bindPopup("<b>Name:</b>Elixir Garden </br><b><b>Address:</b>Karond, Bhopal, Madhya Pradesh 462038<b></br><b>Type:</b>Property Crime</br><b>");    
    L.marker([23.307063,77.352485],{icon: offenceicon }).addTo(mymap).bindPopup("<b>Name:</b>Aero Adventure </br><b><b>Address:</b>New Abbas Ali Nagar Rd, Gandhi Nagar, Bhopal, Madhya Pradesh 462036<b></br><b>Type:</b>Sexual offence</br><b>");    
    L.marker([23.293758,77.324079],{icon: propertyicon }).addTo(mymap).bindPopup("<b>Name:</b>Raja Bhoj Airport Area </br><b><b>Address:</b>Bairagarh, Bhopal, Madhya Pradesh<b></br><b>Type:</b>Property Crime</br><b>");    
    L.marker([23.154881,77.434159],{icon: offenceicon }).addTo(mymap).bindPopup("<b>Name:</b>Rajharsh Colony </br><b><b>Address:</b>Kolar Rd, Bhopal, Madhya Pradesh 462042<b></br><b>Type:</b>Assault</br><b>");    
    L.marker([23.201679,77.494980],{icon: offenceicon }).addTo(mymap).bindPopup("<b>Name:</b>Bhopal</br><b><b>Address:</b>Madhya Pradesh 462038<b></br><b>Type:</b>Gunshot</br><b>");    

    
    L.marker([23.1611, 77.4696],{icon: policeicon }).addTo(mymap).bindPopup("<b>Misrod Police Station</b></br>"); 
    L.marker([23.1397, 77.5297],{icon: policeicon }).addTo(mymap).bindPopup("<b>GC CRPF Bhopal</b></br>"); 
    L.marker([23.1700, 77.4168],{icon: policeicon }).addTo(mymap).bindPopup("<b>Kolar Road Police Station</b></br>"); 
    L.marker([23.186132,77.431810],{icon: policeicon }).addTo(mymap).bindPopup("<b>Shahpura Police Station</b></br>"); 
    L.marker([23.1861, 77.4318],{icon: policeicon }).addTo(mymap).bindPopup("<b>Bag Sevania Police Station</b></br>"); 
    L.marker([19.0564, 72.8728],{icon: policeicon }).addTo(mymap).bindPopup("<b>Chuna Bhatti Police Station</b></br>"); 
    L.marker([23.210981,77.452796],{icon: policeicon }).addTo(mymap).bindPopup("<b>Police Assistence Centre</b></br>"); 
    L.marker([23.2167, 77.4278],{icon: policeicon }).addTo(mymap).bindPopup("<b>Habibganj Police Station</b></br>"); 
    L.marker([23.2152, 77.3955],{icon: policeicon }).addTo(mymap).bindPopup("<b>Awadhpuri Police Station</b></br>"); 
    L.marker([23.2314, 77.4544],{icon: policeicon }).addTo(mymap).bindPopup("<b>Govindpura Police Station</b></br>"); 
    L.marker([23.2351, 77.4290],{icon: policeicon }).addTo(mymap).bindPopup("<b>M.P.Nagar Police Station</b></br>"); 
    L.marker([23.2339, 77.4004],{icon: policeicon }).addTo(mymap).bindPopup("<b>TT Nagar Police Station</b></br>"); 
    L.marker([23.2417, 77.4721],{icon: policeicon }).addTo(mymap).bindPopup("<b>Piplani Police Station</b></br>"); 
    L.marker([23.248251, 77.410371],{icon: policeicon }).addTo(mymap).bindPopup("<b>New Police Head Quarters</b></br>"); 
    L.marker([23.243287, 77.411538],{icon: policeicon }).addTo(mymap).bindPopup("<b>Privaar Parmarsh Kendra Mahila Thana Bhopal</b></br>"); 
    L.marker([23.247875, 77.415206],{icon: policeicon }).addTo(mymap).bindPopup("<b>Police Control Room</b></br>"); 
    L.marker([23.0236, 72.5330],{icon: policeicon }).addTo(mymap).bindPopup("<b>Police Chauki Anand Nagar</b></br>"); 
</script>
</body>
</html>
