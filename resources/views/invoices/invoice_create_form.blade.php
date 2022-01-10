@extends("layouts.app")

@section('content')
<h3> Generate an invoice in XML format </h3>
<p class="fst-italic text-primary"> This form is used to fill in the parameters of the invoice to be generated.
        It is possible to fill it in automatically by clicking on the 
        <a class="btn btn-primary" href=" {{ route('invoiceEdit') }} " role="button">fill out the forms</a>
    </p>


    <form name = "formInvoice" id="formInvoice" method="post" action="{{ route('invoiceCheck') }}"}}>
        @csrf
        <input  type="hidden" name="filename" value="{{ old('filename') }}">

        <fieldset><legend>FatturaElettronicaHeader</legend>
            <fieldset><legend>DatiTrasmissione</legend>
                <fieldset><legend>IdTrasmittente</legend>
                    <div class="row g-1">
                        <div class="col">
                            <!--  INPUT IdPaese -->
                            <label for="IdPaese">IdPaese: </label>
                            <input  id="IdPaese" type="text" name="IdPaese" value="{{ old('IdPaese') }}" placeholder="IT" class="form-control @error('IdPaese') is-invalid @enderror">
                            @error('IdPaese')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>
                            <div class="col">
                        <!--  INPUT IdCodice -->
                            <label for="IdCodice">IdCodice: </label>
                            <input id="IdCodice" type="text" name="IdCodice" value="{{ old('IdCodice') }}" placeholder="01234567890" class="form-control @error('IdCodice') is-invalid @enderror">
                            @error('IdCodice')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </fieldset>
                <div class="row g-1">
                    <div class="col">
                        <!--  INPUT ProgressivoInvio -->
                        <label for="ProgressivoInvio"> ProgressivoInvio: </label>
                        <input id="ProgressivoInvio" type="text" name="ProgressivoInvio" value="{{ old('ProgressivoInvio') }}" placeholder="00001" class="form-control @error('ProgressivoInvio') is-invalid @enderror">
                        @error('ProgressivoInvio')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                    <!--  INPUT FormatoTrasmissione -->
                        <label for="FormatoTrasmissione"> FormatoTrasmissione: </label>
                        <input id="FormatoTrasmissione" type="text" name="FormatoTrasmissione" value="{{ old('FormatoTrasmissione') }}" placeholder="FPA12" class="form-control @error('FormatoTrasmissione') is-invalid @enderror">
                        @error('FormatoTrasmissione')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                    <!--  INPUT CodiceDestinatario -->
                        <label for="CodiceDestinatario"> CodiceDestinatario: </label>
                        <input id="CodiceDestinatario" type="text" name="CodiceDestinatario" value="{{ old('CodiceDestinatario') }}" placeholder="AAAAAA" class="form-control @error('CodiceDestinatario') is-invalid @enderror">
                        @error('CodiceDestinatario')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </fieldset>
            <fieldset><legend>CedentePrestatore</legend><!-- Titre du fieldset -->
                <fieldset><legend>DatiAnagrafici</legend><!-- Titre du fieldset -->
                    <fieldset><legend>IdFiscaleIVA</legend><!-- Titre du fieldset -->
                    <div class="row g-1">
                        <div class="col">
                            <!--  INPUT IdPaese2 -->
                            <label for="IdPaese2"> IdPaese2: </label>
                            <input id="IdPaese2" type="text" name="IdPaese2" value="{{ old('IdPaese2') }}" placeholder="IT" class="form-control @error('IdPaese2') is-invalid @enderror">
                            @error('IdPaese')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                        <!--  INPUT IdCodice2 -->
                            <label for="IdCodice2">IdCodice2: </label>
                            <input id="IdCodice2" type="text" name="IdCodice2" value="{{ old('IdCodice2') }}" placeholder="01234567890" class="form-control @error('IdCodice2') is-invalid @enderror">
                            @error('IdCodice')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    </fieldset>
                    <fieldset><legend>Anagrafica</legend><!-- Titre du fieldset -->
                    <div class="row g-1">
                        <!--  INPUT Denominazione -->
                        <label for="Denominazione"> Denominazione: </label>
                        <input id="Denominazione" type="text" name="Denominazione" value="{{ old('Denominazione') }}" placeholder="ALPHA SRL" class="form-control @error('Denominazione') is-invalid @enderror">
                        @error('Denominazione')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    </fieldset>
                    <div class="row g-1">
                        <!--  INPUT RegimeFiscale -->
                        <label for="RegimeFiscale"> RegimeFiscale: </label>
                        <input id="RegimeFiscale" type="text" name="RegimeFiscale" value="{{ old('RegimeFiscale') }}" placeholder="RF19" class="form-control @error('RegimeFiscale') is-invalid @enderror">
                        @error('RegimeFiscale')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </fieldset>
                <fieldset><legend>Sede</legend>
                    <div class="row g-1">
                        <div class="col">
                            <!--  INPUT Indirizzo -->
                            <label for="Indirizzo"> Indirizzo: </label>
                            <input id="Indirizzo" type="text" name="Indirizzo" value="{{ old('Indirizzo') }}" placeholder="VIALE ROMA 543" class="form-control @error('Indirizzo') is-invalid @enderror">
                            @error('Indirizzo')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <!--  INPUT CAP -->
                            <label for="CAP"> CAP: </label>
                            <input id="CAP" type="text" name="CAP" value="{{ old('CAP') }}" placeholder="07100" class="form-control @error('CAP') is-invalid @enderror">
                            @error('CAP')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row g-1">
                        <div class="col">
                            <!--  INPUT Comune -->
                            <label for="Comune"> Comune: </label>
                            <input id="Comune" type="text" name="Comune" value="{{ old('Comune') }}" placeholder="SASSARI" class="form-control @error('Comune') is-invalid @enderror">
                            @error('Comune')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <!--  INPUT Provincia -->
                            <label for="Provincia"> Provincia: </label>
                            <input id="Provincia" type="text" name="Provincia" value="{{ old('Provincia') }}" placeholder="07100" class="form-control @error('Provincia') is-invalid @enderror">
                            @error('Provincia')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
              
                    <div class="col-md-6">
                        <!--  INPUT Nazione -->
                        <label for="Nazione"> Nazione: </label>
                        <input id="Nazione" type="text" name="Nazione" value="{{ old('Nazione') }}" placeholder="IT" class="form-control @error('Nazione') is-invalid @enderror">
                        @error('Nazione')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>                             
                </fieldset>

                <fieldset><legend> CessionarioCommittente: </legend><!-- Titre du fieldset -->
                    <fieldset><legend> DatiAnagrafici: </legend><!-- Titre du fieldset -->
                        <div class="row g-1">
                            <!--  INPUT CodiceFiscale -->
                            <label for="CodiceFiscale"> CodiceFiscale: </label>
                            <input id="CodiceFiscale" type="text" name="CodiceFiscale" value="{{ old('CodiceFiscale') }}" placeholder="09876543210" class="form-control @error('CodiceFiscale') is-invalid @enderror">
                            @error('CodiceFiscale')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <fieldset><legend> Anagrafica: </legend><!-- Titre du fieldset -->
                            <div class="row g-1">
                                <!--  INPUT Denominazione2 -->
                                <label for="Denominazione2"> Denominazione: </label>
                                <input id="Denominazione2" type="text" name="Denominazione2" value="{{ old('Denominazione2') }}" placeholder="AMMINISTRAZIONE BETA" class="form-control @error('Denominazione2') is-invalid @enderror">
                                @error('Denominazione2')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </fieldset>
                    </fieldset>
                    <fieldset><legend> Sede: </legend><!-- Titre du fieldset -->
                        <div class="row g-1">
                            <div class="col">
                                <!--  INPUT Indirizzo2 -->
                                <label for="Indirizzo2"> Indirizzo2: </label>
                                <input id="Indirizzo2" type="text" name="Indirizzo2" value="{{ old('Indirizzo2') }}" placeholder="VIA TORINO 38-B" class="form-control @error('Indirizzo2') is-invalid @enderror">
                                @error('Indirizzo2')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <!--  INPUT CAP2 -->
                                <label for="CAP2"> CAP2: </label>
                                <input id="CAP2" type="text" name="CAP2" value="{{ old('CAP2') }}" placeholder="00145" class="form-control @error('CAP2') is-invalid @enderror">
                                @error('CAP2')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row g-1">
                            <div class="col">
                                <!--  INPUT Comune2 -->
                                <label for="Comune2"> Comune2: </label>
                                <input id="Comune2" type="text" name="Comune2" value="{{ old('Comune2') }}" placeholder="ROMA" class="form-control @error('Comune2') is-invalid @enderror">
                                @error('Comune2')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <!--  INPUT Provincia2 -->
                                <label for="Provincia2"> Provincia2: </label>
                                <input id="Provincia2" type="text" name="Provincia2" value="{{ old('Provincia2') }}" placeholder="RM" class="form-control @error('Provincia2') is-invalid @enderror">
                                @error('Provincia2')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!--  INPUT Nazione2 -->
                            <label for="Nazione2"> Nazione2: </label>
                            <input id="Nazione2" type="text" name="Nazione2" value="{{ old('Nazione2') }}" placeholder="IT" class="form-control @error('Nazione2') is-invalid @enderror">
                            @error('Nazione2')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                
                    </fieldset>
                </fieldset>
            </fieldset>
        </fieldset>

        <fieldset><legend>FatturaElettronicaBody</legend>
            <fieldset><legend>DatiGenerali</legend>
                <fieldset><legend>DatiGeneraliDocumento</legend>
                    <div class="row g-1">
                        <div class="col">
                            <!--  INPUT TipoDocumento -->
                            <label for="TipoDocumento"> TipoDocumento: </label>
                            <input id="TipoDocumento" type="text" name="TipoDocumento" value="{{ old('TipoDocumento') }}" placeholder="TD01" class="form-control @error('TipoDocumento') is-invalid @enderror">
                            @error('TipoDocumento')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                        <!--  INPUT Divisa -->
                            <label for="Divisa"> Divisa: </label>
                            <input id="Divisa" type="text" name="Divisa" value="{{ old('Divisa') }}" placeholder="EUR" class="form-control @error('Divisa') is-invalid @enderror">
                            @error('Divisa')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row g-1">
                        <div class="col">
                            <!--  INPUT Data -->
                            <label for="Data"> Data: </label>
                            <input id="Data" type="text" name="Data" value="{{ old('Data') }}" placeholder="2017-01-18" class="form-control @error('Data') is-invalid @enderror">
                            @error('Data')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <!--  INPUT Numero -->
                            <label for="Numero"> Numero: </label>
                            <input id="Numero" type="number" name="Numero" value="{{ old('Numero') }}" placeholder="123" class="form-control @error('Numero') is-invalid @enderror">
                            @error('Numero')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!--  INPUT Causale -->
                        <label for="Causale"> Causale: </label>
                        <textarea  rows="5" cols="50" id="Causale" type="text" name="Causale" onKeyPress placeholder="LA FATSSSSSSSSSS" class="form-control @error('Causale') is-invalid @enderror"> {{ old('Causale') }}</textarea>
                        @error('Causale')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </fieldset>
                <fieldset><legend>DatiOrdineAcquisto</legend><!-- Titre du fieldset -->
                    <div class="row g-1">
                        <div class="col">
                            <!--  INPUT RiferimentoNumeroLinea -->
                            <label for="RiferimentoNumeroLinea"> RiferimentoNumeroLinea: </label>
                            <input id="RiferimentoNumeroLinea" type="text" name="RiferimentoNumeroLinea" value="{{ old('RiferimentoNumeroLinea') }}" placeholder="1" class="form-control @error('RiferimentoNumeroLinea') is-invalid @enderror">
                            @error('RiferimentoNumeroLinea')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                             <!--  INPUT IdDocumento -->
                            <label for="IdDocumento"> IdDocumento: </label>
                            <input id="IdDocumento" type="text" name="IdDocumento" value="{{ old('IdDocumento') }}" placeholder="66685" class="form-control @error('IdDocumento') is-invalid @enderror">
                            @error('IdDocumento')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row g-1">
                        <div class="col">
                        <!--  INPUT NumItem -->
                            <label for="NumItem"> NumItem: </label>
                            <input id="NumItem" type="text" name="NumItem" value="{{ old('NumItem') }}" placeholder="1" class="form-control @error('NumItem') is-invalid @enderror">
                            @error('NumItem')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                        <!--  INPUT CodiceCUP-->
                            <label for="CodiceCUP"> CodiceCUP: </label>
                            <input id="CodiceCUP" type="text" name="CodiceCUP" value="{{ old('CodiceCUP') }}" placeholder="123abc" class="form-control @error('CodiceCUP') is-invalid @enderror">
                            @error('CodiceCUP')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!--  INPUT CodiceCIG -->
                        <label for="CodiceCIG"> CodiceCIG: </label>
                        <input id="CodiceCIG" type="text" name="CodiceCIG" value="{{ old('CodiceCIG') }}" placeholder="456def" class="form-control @error('CodiceCIG') is-invalid @enderror">
                        @error('CodiceCIG')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </fieldset>

                <fieldset><legend> DatiContratto </legend>
                    <div class="row g-1">
                        <div class="col">  
                            <!--  INPUT RiferimentoNumeroLinea2 -->
                            <label for="RiferimentoNumeroLinea2"> RiferimentoNumeroLinea: </label>
                            <input id="RiferimentoNumeroLinea2" type="text" name="RiferimentoNumeroLinea2" value="{{ old('RiferimentoNumeroLinea2') }}" placeholder="1" class="form-control @error('RiferimentoNumeroLinea2') is-invalid @enderror">
                            @error('RiferimentoNumeroLinea2')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror                   
                        </div>
                        <div class="col"> 
                            <!--  INPUT IdDocumento2 -->
                            <label for="IdDocumento2"> IdDocumento: </label>
                            <input id="IdDocumento2" type="text" name="IdDocumento2" value="{{ old('IdDocumento2') }}" placeholder="123" class="form-control @error('IdDocumento2') is-invalid @enderror">
                            @error('IdDocumento2')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror                     
                        </div>
                    </div>
                    <div class="row g-1">
                        <div class="col">  
                            <!--  INPUT Data2 -->
                            <label for="Data2"> Data: </label>
                            <input id="Data2" type="date" name="Data2" value="{{ old('Data2') }}" placeholder="2016-09-01" class="form-control @error('Data2') is-invalid @enderror">
                            @error('Data2')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror                   
                        </div>
                        <div class="col"> 
                            <!--  INPUT NumItem2 -->
                            <label for="NumItem2"> NumItem: </label>
                            <input id="NumItem2" type="number" name="NumItem2" value="{{ old('NumItem2') }}" placeholder="5" class="form-control @error('NumItem2') is-invalid @enderror">
                            @error('NumItem2')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror                     
                        </div>
                    </div>
                    <div class="row g-1">
                        <div class="col"> 
                            <!--  INPUT CodiceCUP2 -->
                            <label for="CodiceCUP2"> CodiceCUP: </label>
                            <input id="CodiceCUP2" type="text" name="CodiceCUP2" value="{{ old('CodiceCUP2') }}" placeholder="123abc" class="form-control @error('CodiceCUP2') is-invalid @enderror">
                            @error('CodiceCUP2')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror                     
                        </div>
                        <div class="col">  
                            <!--  INPUT CodiceCIG2 -->
                            <label for="CodiceCIG2"> CodiceCIG: </label>
                            <input id="CodiceCIG2" type="text" name="CodiceCIG2" value="{{ old('CodiceCIG2') }}" placeholder="456def" class="form-control @error('CodiceCIG2') is-invalid @enderror">
                            @error('CodiceCIG2')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror                   
                        </div>
                    </div>
                </fieldset>

                <fieldset><legend> DatiConvenzione </legend>
                    <div class="row g-1">
                        <div class="col">  
                            <!--  INPUT RiferimentoNumeroLinea3 -->
                            <label for="RiferimentoNumeroLinea3"> RiferimentoNumeroLinea: </label>
                            <input id="RiferimentoNumeroLinea3" type="text" name="RiferimentoNumeroLinea3" value="{{ old('RiferimentoNumeroLinea3') }}" placeholder="1" class="form-control @error('RiferimentoNumeroLinea3') is-invalid @enderror">
                            @error('RiferimentoNumeroLinea3')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror                   
                        </div>
                        <div class="col"> 
                            <!--  INPUT IdDocumento3 -->
                            <label for="IdDocumento3"> IdDocumento: </label>
                            <input id="IdDocumento3" type="text" name="IdDocumento3" value="{{ old('IdDocumento3') }}" placeholder="123" class="form-control @error('IdDocumento3') is-invalid @enderror">
                            @error('IdDocumento3')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror                     
                        </div>
                    </div>

                    <div class="row g-1">
                        <div class="col"> 
                            <!--  INPUT NumItem3 -->
                            <label for="NumItem3"> NumItem: </label>
                            <input id="NumItem3" type="number" name="NumItem3" value="{{ old('NumItem3') }}" placeholder="5" class="form-control @error('NumItem3') is-invalid @enderror">
                            @error('NumItem3')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror                     
                        </div>
                        <div class="col"> 
                            <!--  INPUT CodiceCUP3 -->
                            <label for="CodiceCUP3"> CodiceCUP: </label>
                            <input id="CodiceCUP3" type="text" name="CodiceCUP3" value="{{ old('CodiceCUP3') }}" placeholder="123abc" class="form-control @error('CodiceCUP3') is-invalid @enderror">
                            @error('CodiceCUP3')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror                     
                        </div>
                    </div>
                    <div class="col col-md-6">  
                        <!--  INPUT CodiceCIG3 -->
                        <label for="CodiceCIG3"> CodiceCIG: </label>
                        <input id="CodiceCIG3" type="text" name="CodiceCIG3" value="{{ old('CodiceCIG3') }}" placeholder="456def" class="form-control @error('CodiceCIG3') is-invalid @enderror">
                        @error('CodiceCIG3')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror                   
                    </div>
                   
                </fieldset>

                <fieldset><legend> DatiRicezione </legend>
                    <div class="row g-1">
                        <div class="col">  
                            <!--  INPUT RiferimentoNumeroLinea4 -->
                            <label for="RiferimentoNumeroLinea4"> RiferimentoNumeroLinea: </label>
                            <input id="RiferimentoNumeroLinea4" type="text" name="RiferimentoNumeroLinea4" value="{{ old('RiferimentoNumeroLinea4') }}" placeholder="1" class="form-control @error('RiferimentoNumeroLinea4') is-invalid @enderror">
                            @error('RiferimentoNumeroLinea4')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror                   
                        </div>
                        <div class="col"> 
                            <!--  INPUT IdDocumento4 -->
                            <label for="IdDocumento4"> IdDocumento4: </label>
                            <input id="IdDocumento4" type="text" name="IdDocumento4" value="{{ old('IdDocumento4') }}" placeholder="123" class="form-control @error('IdDocumento4') is-invalid @enderror">
                            @error('IdDocumento4')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror                     
                        </div>
                    </div>
                    <div class="row g-1">
                        <div class="col">  
                            <!--  INPUT Data4-->
                            <label for="Data4"> Data: </label>
                            <input id="Data4" type="date" name="Data" value="{{ old('Data4') }}" placeholder="2016-09-01" class="form-control @error('Data4') is-invalid @enderror">
                            @error('Data4')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror                   
                        </div>
                        <div class="col"> 
                            <!--  INPUT NumItem4 -->
                            <label for="NumItem4"> NumItem: </label>
                            <input id="NumItem4" type="number" name="NumItem4" value="{{ old('NumItem4') }}" placeholder="5" class="form-control @error('NumItem4') is-invalid @enderror">
                            @error('NumItem4')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror                     
                        </div>
                    </div>
                    <div class="row g-1">
                        <div class="col"> 
                            <!--  INPUT CodiceCUP4 -->
                            <label for="CodiceCUP4"> CodiceCUP: </label>
                            <input id="CodiceCUP4" type="text" name="CodiceCUP4" value="{{ old('CodiceCUP4') }}" placeholder="123abc" class="form-control @error('CodiceCUP4') is-invalid @enderror">
                            @error('CodiceCUP4')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror                     
                        </div>
                        <div class="col">  
                            <!--  INPUT CodiceCIG4 -->
                            <label for="CodiceCIG4"> CodiceCIG: </label>
                            <input id="CodiceCIG4" type="text" name="CodiceCIG4" value="{{ old('CodiceCIG4') }}" placeholder="456def" class="form-control @error('CodiceCIG4') is-invalid @enderror">
                            @error('CodiceCIG4')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror                   
                        </div>
                    </div>
       
                </fieldset>

                <fieldset><legend>DatiTrasporto</legend><!-- Titre du fieldset -->
                    <fieldset><legend>DatiAnagraficiVettore</legend><!-- Titre du fieldset -->
                        <fieldset><legend>IdFiscaleIVA</legend><!-- Titre du fieldset -->
                        <div class="row g-1">
                           <div class="col">
                                <!--  INPUT IdPaese3 -->
                                <label for="IdPaese3"> IdPaese: </label>
                                <input id="IdPaese3" type="text" name="IdPaese3" value="{{ old('IdPaese3') }}" class="form-control @error('IdPaese3') is-invalid @enderror">
                                @error('IdPaese3')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <!--  INPUT IdCodice3 -->
                                <label for="IdCodice3">IdCodice: </label>
                                <input id="IdCodice3" type="text" name="IdCodice3" value="{{ old('IdCodice3') }}" class="form-control @error('IdCodice3') is-invalid @enderror">
                                @error('IdCodice3')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        </fieldset>
                        <fieldset><legend>IdFiscaleIVA</legend><!-- Titre du fieldset -->
                            <!--  INPUT Denominazione3 -->
                            <label for="Denominazione3">Denominazione: </label>
                            <input id="Denominazione3" type="text" name="Denominazione3" value="{{ old('Denominazione3') }}" class="form-control @error('Denominazione3') is-invalid @enderror">
                            @error('Denominazione3')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </fieldset>
                    </fieldset>
                    <!--  INPUT DataOraConsegna -->
                    <label for="DataOraConsegna">DataOraConsegna: </label>
                    <input id="DataOraConsegna" type="text" name="DataOraConsegna" value="{{ old('DataOraConsegna') }}" class="form-control @error('DataOraConsegna') is-invalid @enderror">
                    @error('DataOraConsegna')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </fieldset>
            </fieldset>



<!--  ///////////////////////////////////////////////////////////// -->
<fieldset class='DatiBeniServizi'>  
                <legend>DatiBeniServizi
                <!--  Button to add and remove DettaglioLinee -->
                    <button id="addDettaglioLinee1" type="button" class="btn btn-secondary btn-sm">  <i class="fas fa-plus-circle"></i>  </button>
                    <button id="delDettaglioLinee1" type="button" class="btn btn-warning btn-sm">  <i class="fas fa-minus-circle"></i>  </button>        
                </legend>

                @for ($i = 1; $i < 4; $i++)
                <fieldset class='DettaglioLinee'><legend> DettaglioLinee {{ $i }} </legend>
                    <div class="row g-1">
                        <div class="col">
                            <!--  INPUT NumeroLinea -->
                            <label for="NumeroLinea"> NumeroLinea: </label>
                            <input id="NumeroLinea" type="text" name="NumeroLinea[]" value="{{ old('NumeroLinea[$i]') }}" placeholder="1" class="form-control @error('NumeroLinea') is-invalid @enderror">
                            @error('NumeroLinea')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                        <!--  INPUT Descrizione -->
                            <label for="Descrizione"> Descrizione: </label>
                            <input id="Descrizione" type="text" name="Descrizione[]" value="{{ old('Descrizione[$i]') }}" placeholder="DESCRIZIONE DELLA FORNITURA" class="form-control @error('Descrizione') is-invalid @enderror">
                            @error('Descrizione')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row g-1">
                        <div class="col">
                        <!--  INPUT Quantita -->
                            <label for="Quantita"> Quantita: </label>
                            <input id="Quantita" type="text" name="Quantita[]" value="{{ old('Quantita[$i]') }}" placeholder="5.00" class="form-control @error('Quantita') is-invalid @enderror">
                            @error('Quantita')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <!--  INPUT PrezzoUnitario -->
                            <label for="PrezzoUnitario"> PrezzoUnitario: </label>
                            <input id="PrezzoUnitario" type="text" name="PrezzoUnitario[]" value="{{ old('PrezzoUnitario[$i]') }}" placeholder="1.00" class="form-control @error('PrezzoUnitario') is-invalid @enderror">
                            @error('PrezzoUnitario')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row g-1">
                        <div class="col">
                            <!--  INPUT PrezzoTotale -->
                            <label for="PrezzoTotale"> PrezzoTotale: </label>
                            <input id="PrezzoTotale" type="text" name="PrezzoTotale[]" value="{{ old('PrezzoTotale[$i]') }}" placeholder="1.00" class="form-control @error('PrezzoTotale') is-invalid @enderror">
                            @error('PrezzoTotale')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <!--  INPUT AliquotaIVA -->
                            <label for="AliquotaIVA"> AliquotaIVA: </label>
                            <input id="AliquotaIVA" type="text" name="AliquotaIVA[]" value="{{ old('AliquotaIVA[$i]') }}" placeholder="22.00" class="form-control @error('AliquotaIVA') is-invalid @enderror">
                            @error('AliquotaIVA')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </fieldset>
                @endfor
                <fieldset><legend>DatiRiepilogo</legend>
                    <div class="row g-1">
                        <div class="col">
                            <!--  INPUT AliquotaIVA2 -->
                            <label for="AliquotaIVA2"> AliquotaIVA2: </label>
                            <input id="AliquotaIVA2" type="text" name="AliquotaIVA2" value="{{ old('AliquotaIVA2') }}" placeholder="22.00" class="form-control @error('AliquotaIVA2') is-invalid @enderror">
                            @error('AliquotaIVA2')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                        <!--  INPUT ImponibileImporto -->
                            <label for="ImponibileImporto"> ImponibileImporto: </label>
                            <input id="ImponibileImporto" type="text" name="ImponibileImporto" value="{{ old('ImponibileImporto') }}" placeholder="5.00" class="form-control @error('ImponibileImporto') is-invalid @enderror">
                            @error('ImponibileImporto')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row g-1">
                        <div class="col">
                        <!--  INPUT Imposta -->
                            <label for="Imposta"> Imposta: </label>
                            <input id="Imposta" type="text" name="Imposta" value="{{ old('Imposta') }}" placeholder="1.10" class="form-control @error('Imposta') is-invalid @enderror">
                            @error('Imposta')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                        <!--  INPUT EsigibilitaIVA -->
                            <label for="EsigibilitaIVA"> EsigibilitaIVA: </label>
                            <input id="EsigibilitaIVA" type="text" name="EsigibilitaIVA" value="{{ old('EsigibilitaIVA') }}" placeholder="I" class="form-control @error('EsigibilitaIVA') is-invalid @enderror">
                            @error('EsigibilitaIVA')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </fieldset>
            </fieldset>
            <fieldset><legend>DatiPagamento</legend>
                <div class="row g-1">
                    <!--  INPUT CondizioniPagamento -->
                    <label for="CondizioniPagamento"> CondizioniPagamento: </label>
                    <input id="CondizioniPagamento" type="text" name="CondizioniPagamento" value="{{ old('CondizioniPagamento') }}" placeholder="TP01" class="form-control @error('CondizioniPagamento') is-invalid @enderror">
                    @error('CondizioniPagamento')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <fieldset><legend>DettaglioPagamento</legend><!-- Titre du fieldset -->
                    <div class="row g-1">
                        <div class="col">
                            <!--  INPUT ModalitaPagamento -->
                            <label for="ModalitaPagamento"> ModalitaPagamento: </label>
                            <input id="ModalitaPagamento" type="text" name="ModalitaPagamento" value="{{ old('ModalitaPagamento') }}" placeholder="MP01" class="form-control @error('ModalitaPagamento') is-invalid @enderror">
                            @error('ModalitaPagamento')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                        <!--  INPUT DataScadenzaPagamento -->
                            <label for="DataScadenzaPagamento"> DataScadenzaPagamento: </label>
                            <input id="DataScadenzaPagamento" type="text" name="DataScadenzaPagamento" value="{{ old('DataScadenzaPagamento') }}" placeholder="2017-02-18" class="form-control @error('DataScadenzaPagamento') is-invalid @enderror">
                            @error('DataScadenzaPagamento')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!--  INPUT ImportoPagamento -->
                        <label for="ImportoPagamento"> ImportoPagamento: </label>
                        <input id="ImportoPagamento" type="text" name="ImportoPagamento" value="{{ old('ImportoPagamento') }}" placeholder="6.10" class="form-control @error('ImportoPagamento') is-invalid @enderror">
                        @error('ImportoPagamento')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </fieldset>
            </fieldset>
        </fieldset>

        <!--  INPUT SUBMIT BUTTON-->
        <button type="submit" name="submit" class="btn btn-primary"> <i class="fas fa-paper-plane"></i>Submit </button>
  
        <button type="reset" name="reset"  class="btn btn-warning">  <i class="fas fa-undo"></i>  Reset </button>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#checkInvoice">
        See Invoice
        </button>

    </form>

<!-- Modal -->
<div class="modal fade" id="checkInvoice" tabindex="-1" aria-labelledby="checkInvoiceLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="checkInvoiceLabel"> Generated invoice</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p class="fst-italic text-primary">  Please check if your invoice is correct : </p>
       <pre id="xmlcontent" style = "border: 1px solid;
                  margin: 5px;
                  padding: 10px;
                  overflow-x: auto;
                  white-space: pre-wrap;
                  word-wrap: break-word;
                  background-color: rgb(226, 234, 241);
                  font-family: Open sans;
                  font-size: 15px;">      
        </pre>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection
@push('scripts')
<script src="{{ asset('js/addDettagliolinee.js') }}"></script>
<script src="{{ asset('js/invoiceToModal.js') }}"></script>
@endpush
