
const form = document.querySelector('#formInvoice');

form.addEventListener('submit',function(e){
    e.preventDefault();

    let url = this.getAttribute('action');
    
    //let data = Object.fromEntries(new FormData(document.querySelector('form')));
    /** Retrieve all Array input */
    let NumeroLinea = document.getElementsByName('NumeroLinea[]');
    let Descrizione = document.getElementsByName('Descrizione[]');
    let Quantita = document.getElementsByName('Quantita[]');
    let PrezzoUnitario = document.getElementsByName('PrezzoUnitario[]');
    let PrezzoTotale = document.getElementsByName('PrezzoTotale[]');
    let AliquotaIVA = document.getElementsByName('AliquotaIVA[]');
    /** Put it in array */
    let NumeroLineaValues=[], DescrizioneValues=[],QuantitaValues=[],PrezzoUnitarioValues=[],PrezzoTotaleValues=[],AliquotaIVAValues=[];
    for (var i = 0; i < NumeroLinea.length; i++) {
        NumeroLineaValues[i] =   NumeroLinea[i].value
        DescrizioneValues[i]=Descrizione[i].value;
        QuantitaValues[i]=Quantita[i].value;
        PrezzoUnitarioValues[i]=PrezzoUnitario[i].value;
        PrezzoTotaleValues[i]=PrezzoTotale[i].value;
        AliquotaIVAValues[i]=AliquotaIVA[i].value;
    }



    let data = {
        "IdPaese": form.elements["IdPaese"].value,
        "IdCodice": form.elements["IdCodice"].value,
        "ProgressivoInvio":form.elements["ProgressivoInvio"].value,
        "FormatoTrasmissione":form.elements["FormatoTrasmissione"].value,
        "CodiceDestinatario":form.elements["CodiceDestinatario"].value,
        "IdPaese2": form.elements["IdPaese2"].value,
        "IdCodice2": form.elements["IdCodice2"].value,
        "Denominazione":form.elements["Denominazione"].value,
        "RegimeFiscale":form.elements["RegimeFiscale"].value,
        "Indirizzo":form.elements["Indirizzo"].value,
        "CAP":form.elements["CAP"].value,
        "Comune":form.elements["Comune"].value,
        "Provincia":form.elements["Provincia"].value,
        "Nazione":form.elements["Nazione"].value,

        "CodiceFiscale":form.elements["CodiceFiscale"].value,
        "Denominazione2":form.elements["Denominazione2"].value,
        "Indirizzo2":form.elements["Indirizzo2"].value,
        "CAP2":form.elements["CAP2"].value,
        "Comune2":form.elements["Comune2"].value,
        "Provincia2":form.elements["Provincia2"].value,
        "Nazione2":form.elements["Nazione2"].value,

        "TipoDocumento":form.elements["TipoDocumento"].value,
        "Divisa":form.elements["Divisa"].value,
        "Data":form.elements["Data"].value,
        "Numero":form.elements["Numero"].value,
        "Causale":form.elements["Causale"].value,
        "RiferimentoNumeroLinea":form.elements["RiferimentoNumeroLinea"].value,
        "IdDocumento":form.elements["IdDocumento"].value,
        "NumItem":form.elements["NumItem"].value,
        "CodiceCUP":form.elements["CodiceCUP"].value,
        "CodiceCIG":form.elements["CodiceCIG"].value,
        "RiferimentoNumeroLinea2":form.elements["RiferimentoNumeroLinea2"].value,
        "IdDocumento2":form.elements["IdDocumento2"].value,
        "Data2":form.elements["Data2"].value,
        "NumItem2":form.elements["NumItem2"].value,
        "CodiceCUP2":form.elements["CodiceCUP2"].value,
        "CodiceCIG2":form.elements["CodiceCIG2"].value,
        "RiferimentoNumeroLinea3":form.elements["RiferimentoNumeroLinea3"].value,
        "IdDocumento3":form.elements["IdDocumento3"].value,
        "NumItem3":form.elements["NumItem3"].value,
        "CodiceCUP3":form.elements["CodiceCUP3"].value,
        "CodiceCIG3":form.elements["CodiceCIG3"].value,
        "RiferimentoNumeroLinea4":form.elements["RiferimentoNumeroLinea4"].value,
        "IdDocumento4":form.elements["IdDocumento4"].value,
        "NumItem4":form.elements["NumItem4"].value,
        "CodiceCUP4":form.elements["CodiceCUP4"].value,
        "CodiceCIG4":form.elements["CodiceCIG4"].value,

        "IdPaese3": form.elements["IdPaese3"].value,
        "IdCodice3": form.elements["IdCodice3"].value,
        "Denominazione3":form.elements["Denominazione3"].value,
        "DataOraConsegna":form.elements["DataOraConsegna"].value,

        "NumeroLinea":NumeroLineaValues,
        "Descrizione":DescrizioneValues,
        "Quantita":QuantitaValues,
        "PrezzoUnitario":PrezzoUnitarioValues,
        "PrezzoTotale":PrezzoTotaleValues,
        "AliquotaIVA":AliquotaIVAValues,

        "AliquotaIVA2":form.elements["AliquotaIVA2"].value,
        "ImponibileImporto":form.elements["ImponibileImporto"].value,
        "Imposta":form.elements["Imposta"].value,
        "EsigibilitaIVA":form.elements["EsigibilitaIVA"].value,
        "CondizioniPagamento":form.elements["CondizioniPagamento"].value,
        "ModalitaPagamento":form.elements["ModalitaPagamento"].value,
        "DataScadenzaPagamento":form.elements["DataScadenzaPagamento"].value,
        "ImportoPagamento":form.elements["ImportoPagamento"].value,
    }
 
   fetch(url,{
       headers:{  
           'Content-Type':'application/json',
           'X-Requested-With': 'XMLHttpRequest',
           'X-CSRF-TOKEN':  form.elements[0].value
       },
       method:'post',
       body: JSON.stringify(data)
   }).then(response =>{
       console.log(response)
       document.querySelector('.modal-body').textContent = response;

   } ).catch(error => {
       console.log(error)
   })
});


/*
const form = document.querySelector('#formInvoice');

form.addEventListener('submit',function(e){
    e.preventDefault();
    let url = this.getAttribute('action');
    // pre-fill FormData from the form
    let formData = Object.fromEntries(new FormData(document.querySelector('form')));

    xhttp = new XMLHttpRequest();
    xhttp.open("POST", url, true); 
    xhttp.setRequestHeader("Content-type",'application/json') 
    xhttp.setRequestHeader("X-CSRF-TOKEN",document.querySelector('input[name="_token"]'))
    xhttp.responseType = 'xml';
    xhttp.send(JSON.stringify(formData));
})

*/
