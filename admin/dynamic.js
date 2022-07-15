var cars={
    BE:['AI&ML','AI&DS','Automobile','Civil','Chemical','CSE','E&I','ECE','Mechanical','Mechatronics','Fashion'],
    ME:['CAD','ES','SE','AE','CIE','VLSI','CSE','CEM','ED','ECE','Mechanical','Mechatronics'],
    BTech:['FT','IT'],
    MTech:['FT','IT'],
    MSc:['SS'],
    MCA:['MCA'],
    MBA:['MBA'],
    MSc:['SS','CT'],
    BSc:['SS','IS','CSD'],
    Boy:['Bharathi','Dheeran','Ilango','Kamban','Ponnar','Sankar','Valluvar'],
    Girl:['Amaravathi','Bhavani','Kaveri'],
    TG:['No Hostels']
}

var main=document.getElementById('main_menu');
var sub=document.getElementById('sub_menu');

main.addEventListener('change',function(){


    var selected_option=cars[this.value];
 

    while(sub.options.length >0){
        sub.options.remove(0);
    }

    Array.from(selected_option).forEach(function(el){

        let option = new Option(el, el);
        sub.appendChild(option); 
});

});
var main1=document.getElementById('main_menu1');
var sub1=document.getElementById('sub_menu1');

main1.addEventListener('change',function(){


    var selected_option=cars[this.value];
 

    while(sub1.options.length >0){
        sub1.options.remove(0);
    }

    Array.from(selected_option).forEach(function(el){

        let option = new Option(el, el);
        sub1.appendChild(option); 
});

});


