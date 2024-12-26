let doctorlist = ["doctor1", "doctor2", "doctor3", "doctor4", "doctor5", "doctor6"];
let doctordescription = ["doctor1 description", "doctor2 description", "doctor3 description", "doctor4 description", "doctor5 description", "doctor6 description"];

document.addEventListener('click', function (event) {

    let clickedElement = event.target;
    let closedELement = clickedElement.closest('.doctor');
    let closedELementa = closedELement.outerHTML;



    for (let i = 0; i < doctorlist.length; i++) {
        if (closedELement.id === doctorlist[i]) {
            console.log(doctordescription[i]);
            closedELement.innerText = doctordescription[i];


        }
    }

    console.log(closedELementa);


    closedELement.addEventListener('mouseleave', function () {
        closedELement.outerHTML = closedELementa;
    });

});