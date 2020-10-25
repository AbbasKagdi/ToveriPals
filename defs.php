<?php
    /* redirect unwanted page visit */
    if(!defined('read_defs')) {
        header("Location: 404.php");
	    die();
    }

$company = array("Vegware", "Emco", "Connexx", "Handle-IT", "Retention System", "Panacor", "Varley and Gulliver", "Olga S.R.L.", "Rey Procesos de Fundición", "Marcal", "Zippole", "Sernis", "Tecnivial", "KISAN GROUP", "KOSEDAG", "Gonvarri");
        
$desc = array(
    "Specialized in plant-based compostable foodservice packaging.",
    "Carpet mats ideal for trapping low-level dirt and moisture.",
    "Modular entrance tile matting system with easy install and minimal waste.",
    "Floor mounted safety, dock, & packaging equipment for industrial requirements.",
    "Unique Patent for installing or remvoing posts in high-strength RS sockets.",
    "Manufacturing and installing noise barriers for road and railway infrastructures.",
    "Steel and Aluminium bridge parapets for civil the engineering industry.",
    "New technology for durable road signs made from recycled materials.",
    "Presentable decoration and lighting for roadways.",
    "French Signage company with idealogies of ecological and circular economy.",
    "Eco friendly pole that ensures strength and safety.",
    "A Pioneer in Electronic Displays, LED lighting and Optical Fiber.",
    "Benchmark in providing comprehensive signaling, beaconing and safety solutions.",
    "Producer of road marking materials, traffic signs, and steel road barriers.",
    "Manufacturer of mesh wire fence and provider of physical security solutions.",
    "Experts in Automotive, Road Safety, Energy, Material Handling, and Industrial setors."
);

$website = array(
    "https://www.vegware.com/uk/",
    "https://www.emco-bau.com/en/",
    "https://www.emco-bau.com/en/",
    "https://www.panacor2000.com/en",
    "https://www.retention-system.com/",
    "https://www.panacor2000.com/en",
    "http://www.v-and-g.co.uk/",
    "http://www.olgasrl.it/",
    "http://www.reyprocesos.com",
    "https://www.marcal.fr/",
    "https://zippole.com/",
    "https://www.sernis.com/#road-safety",
    "https://www.tecnivial.es",
    "https://www.kisanweb.com/road-marking-materials",
    "http://www.kosedag.com.tr/en",
	"https://www.gonvarri.com/en/"
);

$img = array(
    "vegware",
    "emco3",
    "conx",
    "handle",
    "ret.jpg",
    "pan.jpg",
    "vg.jpg",
    "olga.jpg",
    "rey.jpg",
    "palace.jpg",
    "zip.jpg",
    "sernis.jpg",
    "tec.jpg",
    "kisan.jpg",
    "kose.jpg",
	"gonvarri.jpg"
);

?>