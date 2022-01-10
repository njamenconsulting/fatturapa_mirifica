 // On récupère l'élément sur lequel on veut détecter le clic
const addButton = document.getElementById('addDettaglioLinee1');
const delButton = document.getElementById('delDettaglioLinee1');
 // On écoute l'événement click, notre callback prend un paramètre que nous avons appelé event ici
addButton.addEventListener('click', function(event) {    
    event.preventDefault();        
    let fieldsetParent = document.querySelector('.DatiBeniServizi');
    let fieldsetChild = document.querySelector('.DettaglioLinee'); 
    let newFieldset = fieldsetChild.cloneNode(true);

    DettaglioLinee = document.querySelectorAll(".DettaglioLinee") 
    newFieldset.id = 'DettaglioLinee'+ DettaglioLinee.length;
    let i = DettaglioLinee.length+1
    newFieldset.getElementsByTagName('legend')[0].textContent= 'DettaglioLinee '+i;
  
    fieldsetParent.insertBefore(newFieldset, fieldsetChild);
    
});
delButton.addEventListener('click', function(event) {    
    event.preventDefault(); 
    var itemChild = document.querySelectorAll(".DettaglioLinee") 
    if(itemChild.length>1 )
    {    
        let fieldsetParent = document.querySelector('.DatiBeniServizi')   
        let fieldsetChild = fieldsetParent.querySelector('.DettaglioLinee')
        fieldsetParent.removeChild(fieldsetChild);
    }

});
