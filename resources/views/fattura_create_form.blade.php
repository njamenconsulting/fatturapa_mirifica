@extends("layout")

@section('content')
    <h3> Fattura elettronica italiana <strong>in XML</strong> (formato FatturaPA)</h3>
    <a href=" {{ route('fattura-edit') }} ">Fill form</a>
    </br></br></br>
    <form method="post" action="{{ route('fattura-store') }}"}}>
        @csrf
        <fieldset class="FatturaElettronicaHeader"><legend>FatturaElettronicaHeader</legend>
            <fieldset class="DatiTrasmissione"><legend>DatiTrasmissione</legend><!-- Titre du fieldset -->
                <fieldset class="IdTrasmittente"><legend>IdTrasmittente</legend><!-- Titre du fieldset -->
                    <!--  INPUT IdPaese -->
                    <label for="IdPaese">IdPaese: </label>
                    <input size="50%" id="IdPaese" type="text" name="IdPaese" value="{{ old('IdPaese') }}" placeholder="IT" class="@error('IdPaese') is-invalid @enderror">
                    @error('IdPaese')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <!--  INPUT IdCodice -->
                    <label for="IdCodice">IdCodice: </label>
                    <input id="IdCodice" type="text" name="IdCodice" value="{{ old('IdCodice') }}" placeholder="01234567890" class="@error('IdCodice') is-invalid @enderror">
                    @error('IdCodice')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </fieldset>
                <!--  INPUT ProgressivoInvio -->
                <label for="ProgressivoInvio"> ProgressivoInvio: </label>
                <input id="ProgressivoInvio" type="text" name="ProgressivoInvio" value="{{ old('ProgressivoInvio') }}" placeholder="00001" class="@error('ProgressivoInvio') is-invalid @enderror">
                @error('ProgressivoInvio')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            <!--  INPUT FormatoTrasmissione -->
                <label for="FormatoTrasmissione"> FormatoTrasmissione: </label>
                <input id="FormatoTrasmissione" type="text" name="FormatoTrasmissione" value="{{ old('FormatoTrasmissione') }}" placeholder="FPA12" class="@error('FormatoTrasmissione') is-invalid @enderror">
                @error('FormatoTrasmissione')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            <!--  INPUT CodiceDestinatario -->
                <label for="CodiceDestinatario"> CodiceDestinatario: </label>
                <input id="CodiceDestinatario" type="text" name="CodiceDestinatario" value="{{ old('CodiceDestinatario') }}" placeholder="AAAAAA" class="@error('CodiceDestinatario') is-invalid @enderror">
                @error('CodiceDestinatario')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </fieldset>
            <fieldset><legend>CedentePrestatore</legend><!-- Titre du fieldset -->
                <fieldset><legend>DatiAnagrafici</legend><!-- Titre du fieldset -->
                    <fieldset><legend>IdFiscaleIVA</legend><!-- Titre du fieldset -->
                        <!--  INPUT IdPaese2 -->
                        <label for="IdPaese2"> IdPaese2: </label>
                        <input id="IdPaese2" type="text" name="IdPaese2" value="{{ old('IdPaese2') }}" placeholder="IT" class="@error('IdPaese2') is-invalid @enderror">
                        @error('IdPaese')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    <!--  INPUT IdCodice2 -->
                        <label for="IdCodice2">IdCodice2: </label>
                        <input id="IdCodice2" type="text" name="IdCodice2" value="{{ old('IdCodice2') }}" placeholder="01234567890" class="@error('IdCodice2') is-invalid @enderror">
                        @error('IdCodice')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </fieldset>
                    <fieldset>
                        <legend>Anagrafica</legend><!-- Titre du fieldset -->
                        <!--  INPUT Denominazione -->
                        <label for="Denominazione"> Denominazione: </label>
                        <input id="Denominazione" type="text" name="Denominazione" value="{{ old('Denominazione') }}" placeholder="ALPHA SRL" class="@error('Denominazione') is-invalid @enderror">
                        @error('Denominazione')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </fieldset>
                    <!--  INPUT RegimeFiscale -->
                    <label for="RegimeFiscale"> RegimeFiscale: </label>
                    <input id="RegimeFiscale" type="text" name="RegimeFiscale" value="{{ old('RegimeFiscale') }}" placeholder="RF19" class="@error('RegimeFiscale') is-invalid @enderror">
                    @error('RegimeFiscale')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </fieldset>
                <fieldset>
                    <legend>Sede</legend><!-- Titre du fieldset -->
                    <!--  INPUT Indirizzo -->
                    <label for="Indirizzo"> Indirizzo: </label>
                    <input id="Indirizzo" type="text" name="Indirizzo" value="{{ old('Indirizzo') }}" placeholder="VIALE ROMA 543" class="@error('Indirizzo') is-invalid @enderror">
                    @error('Indirizzo')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <!--  INPUT CAP -->
                    <label for="CAP"> CAP: </label>
                    <input id="CAP" type="text" name="CAP" value="{{ old('CAP') }}" placeholder="07100" class="@error('CAP') is-invalid @enderror">
                    @error('CAP')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <!--  INPUT Comune -->
                    <label for="Comune"> Comune: </label>
                    <input id="Comune" type="text" name="Comune" value="{{ old('Comune') }}" placeholder="SASSARI" class="@error('Comune') is-invalid @enderror">
                    @error('Comune')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <!--  INPUT Provincia -->
                    <label for="Provincia"> Provincia: </label>
                    <input id="Provincia" type="text" name="Provincia" value="{{ old('Provincia') }}" placeholder="07100" class="@error('Provincia') is-invalid @enderror">
                    @error('Provincia')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <!--  INPUT Nazione -->
                    <label for="Nazione"> Nazione: </label>
                    <input id="Nazione" type="text" name="Nazione" value="{{ old('Nazione') }}" placeholder="IT" class="@error('Nazione') is-invalid @enderror">
                    @error('Nazione')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </fieldset>
                <fieldset><legend> CessionarioCommittente: </legend><!-- Titre du fieldset -->
                    <fieldset><legend> DatiAnagrafici: </legend><!-- Titre du fieldset -->
                        <!--  INPUT CodiceFiscale -->
                        <label for="CodiceFiscale"> CodiceFiscale: </label>
                        <input id="CodiceFiscale" type="text" name="CodiceFiscale" value="{{ old('CodiceFiscale') }}" placeholder="09876543210" class="@error('CodiceFiscale') is-invalid @enderror">
                        @error('CodiceFiscale')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <fieldset><legend> Anagrafica: </legend><!-- Titre du fieldset -->
                            <!--  INPUT Denominazione2 -->
                            <label for="Denominazione2"> Denominazione: </label>
                            <input id="Denominazione2" type="text" name="Denominazione2" value="{{ old('Denominazione2') }}" placeholder="AMMINISTRAZIONE BETA" class="@error('Denominazione2') is-invalid @enderror">
                            @error('Denominazione2')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </fieldset>
                    </fieldset>
                    <fieldset><legend> Sede: </legend><!-- Titre du fieldset -->
                        <!--  INPUT Indirizzo2 -->
                        <label for="Indirizzo2"> Indirizzo2: </label>
                        <input id="Indirizzo2" type="text" name="Indirizzo2" value="{{ old('Indirizzo2') }}" placeholder="VIA TORINO 38-B" class="@error('Indirizzo2') is-invalid @enderror">
                        @error('Indirizzo2')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    <!--  INPUT CAP2 -->
                        <label for="CAP2"> CAP2: </label>
                        <input id="CAP2" type="text" name="CAP2" value="{{ old('CAP2') }}" placeholder="00145" class="@error('CAP2') is-invalid @enderror">
                        @error('CAP2')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    <!--  INPUT Comune2 -->
                        <label for="Comune2"> Comune2: </label>
                        <input id="Comune2" type="text" name="Comune2" value="{{ old('Comune2') }}" placeholder="ROMA" class="@error('Comune2') is-invalid @enderror">
                        @error('Comune2')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    <!--  INPUT Provincia2 -->
                        <label for="Provincia2"> Provincia2: </label>
                        <input id="Provincia2" type="text" name="Provincia2" value="{{ old('Provincia2') }}" placeholder="RM" class="@error('Provincia2') is-invalid @enderror">
                        @error('Provincia2')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    <!--  INPUT Nazione2 -->
                        <label for="Nazione2"> Nazione2: </label>
                        <input id="Nazione2" type="text" name="Nazione2" value="{{ old('Nazione2') }}" placeholder="IT" class="@error('Nazione2') is-invalid @enderror">
                        @error('Nazione2')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </fieldset>
                </fieldset>
            </fieldset>
        </fieldset>


        <fieldset><legend>FatturaElettronicaBody</legend>
            <fieldset><legend>DatiGenerali</legend><!-- Titre du fieldset -->
                <fieldset><legend>DatiGeneraliDocumento</legend><!-- Titre du fieldset -->
                    <!--  INPUT TipoDocumento -->
                    <label for="TipoDocumento"> TipoDocumento: </label>
                    <input id="TipoDocumento" type="text" name="TipoDocumento" value="{{ old('TipoDocumento') }}" placeholder="TD01" class="@error('TipoDocumento') is-invalid @enderror">
                    @error('TipoDocumento')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <!--  INPUT Divisa -->
                    <label for="Divisa"> Divisa: </label>
                    <input id="Divisa" type="text" name="Divisa" value="{{ old('Divisa') }}" placeholder="EUR" class="@error('Divisa') is-invalid @enderror">
                    @error('Divisa')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <!--  INPUT Data -->
                    <label for="Data"> Data: </label>
                    <input id="Data" type="text" name="Data" value="{{ old('Data') }}" placeholder="2017-01-18" class="@error('Data') is-invalid @enderror">
                    @error('Data')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <!--  INPUT Numero -->
                    <label for="Numero"> Numero: </label>
                    <input id="Numero" type="text" name="Numero" value="{{ old('Numero') }}" placeholder="123" class="@error('Numero') is-invalid @enderror">
                    @error('Numero')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </br>
                    <!--  INPUT Causale -->
                    <label for="Causale"> Causale: </label>
                    <textarea id="Causale" type="text" name="Causale" value="{{ old('Causale') }}" placeholder="LA FATTURA FA RIFERIMENTO AD UNA OPERAZIONE AAAA BBBBBBBBBBBBBBBBBB CCC DDDDDDDDDDDDDDD E FFFFFFFFFFFFFFFFFFFF GGGGGGGGGG HHHHHHH II LLLLLLLLLLLLLLLLL MMM NNNNN OO PPPPPPPPPPP QQQQ RRRR SSSSSSSSSSSSSS" class="@error('Causale') is-invalid @enderror"></textarea>
                    @error('Causale')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </fieldset>
                <fieldset><legend>DatiOrdineAcquisto</legend><!-- Titre du fieldset -->
                    <!--  INPUT RiferimentoNumeroLinea -->
                    <label for="RiferimentoNumeroLinea"> RiferimentoNumeroLinea: </label>
                    <input id="RiferimentoNumeroLinea" type="text" name="RiferimentoNumeroLinea" value="{{ old('RiferimentoNumeroLinea') }}" placeholder="1" class="@error('RiferimentoNumeroLinea') is-invalid @enderror">
                    @error('RiferimentoNumeroLinea')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <!--  INPUT IdDocumento -->
                    <label for="IdDocumento"> IdDocumento: </label>
                    <input id="IdDocumento" type="text" name="IdDocumento" value="{{ old('IdDocumento') }}" placeholder="66685" class="@error('IdDocumento') is-invalid @enderror">
                    @error('IdDocumento')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <!--  INPUT NumItem -->
                    <label for="NumItem"> NumItem: </label>
                    <input id="NumItem" type="text" name="NumItem" value="{{ old('NumItem') }}" placeholder="1" class="@error('NumItem') is-invalid @enderror">
                    @error('NumItem')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <!--  INPUT CodiceCUP-->
                    <label for="CodiceCUP"> CodiceCUP: </label>
                    <input id="CodiceCUP" type="text" name="CodiceCUP" value="{{ old('CodiceCUP') }}" placeholder="123abc" class="@error('CodiceCUP') is-invalid @enderror">
                    @error('CodiceCUP')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </br>
                    <!--  INPUT CodiceCIG -->
                    <label for="CodiceCIG"> CodiceCIG: </label>
                    <input id="CodiceCIG" type="text" name="CodiceCIG" value="{{ old('CodiceCIG') }}" placeholder="456def" class="@error('CodiceCIG') is-invalid @enderror">
                    @error('CodiceCIG')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </fieldset>
            </fieldset>
            <fieldset><legend>DatiBeniServizi</legend><!-- Titre du fieldset -->
                <fieldset><legend>DettaglioLinee</legend><!-- Titre du fieldset -->
                    <!--  INPUT NumeroLinea -->
                    <label for="NumeroLinea"> NumeroLinea: </label>
                    <input id="NumeroLinea" type="text" name="NumeroLinea" value="{{ old('NumeroLinea') }}" placeholder="1" class="@error('NumeroLinea') is-invalid @enderror">
                    @error('NumeroLinea')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <!--  INPUT Descrizione -->
                    <label for="Descrizione"> Descrizione: </label>
                    <input id="Descrizione" type="text" name="Descrizione" value="{{ old('Descrizione') }}" placeholder="DESCRIZIONE DELLA FORNITURA" class="@error('Descrizione') is-invalid @enderror">
                    @error('Descrizione')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <!--  INPUT Quantita -->
                    <label for="Quantita"> Quantita: </label>
                    <input id="Quantita" type="text" name="Quantita" value="{{ old('Quantita') }}" placeholder="5.00" class="@error('Quantita') is-invalid @enderror">
                    @error('Quantita')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <!--  INPUT PrezzoTotale -->
                    <label for="PrezzoTotale"> PrezzoTotale: </label>
                    <input id="PrezzoTotale" type="text" name="PrezzoTotale" value="{{ old('PrezzoTotale') }}" placeholder="1.00" class="@error('PrezzoTotale') is-invalid @enderror">
                    @error('PrezzoTotale')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <!--  INPUT AliquotaIVA -->
                    <label for="AliquotaIVA"> AliquotaIVA: </label>
                    <input id="AliquotaIVA" type="text" name="AliquotaIVA" value="{{ old('AliquotaIVA') }}" placeholder="22.00" class="@error('AliquotaIVA') is-invalid @enderror">
                    @error('AliquotaIVA')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </fieldset>
                <fieldset><legend>DatiRiepilogo</legend><!-- Titre du fieldset -->
                    <!--  INPUT AliquotaIVA2 -->
                    <label for="AliquotaIVA2"> AliquotaIVA2: </label>
                    <input id="AliquotaIVA2" type="text" name="AliquotaIVA2" value="{{ old('AliquotaIVA2') }}" placeholder="22.00" class="@error('AliquotaIVA2') is-invalid @enderror">
                    @error('AliquotaIVA2')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <!--  INPUT ImponibileImporto -->
                    <label for="ImponibileImporto"> ImponibileImporto: </label>
                    <input id="ImponibileImporto" type="text" name="ImponibileImporto" value="{{ old('ImponibileImporto') }}" placeholder="5.00" class="@error('ImponibileImporto') is-invalid @enderror">
                    @error('ImponibileImporto')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <!--  INPUT Imposta -->
                    <label for="Imposta"> Imposta: </label>
                    <input id="Imposta" type="text" name="Imposta" value="{{ old('Imposta') }}" placeholder="1.10" class="@error('Imposta') is-invalid @enderror">
                    @error('Imposta')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <!--  INPUT EsigibilitaIVA -->
                    <label for="EsigibilitaIVA"> EsigibilitaIVA: </label>
                    <input id="EsigibilitaIVA" type="text" name="EsigibilitaIVA" value="{{ old('EsigibilitaIVA') }}" placeholder="I" class="@error('EsigibilitaIVA') is-invalid @enderror">
                    @error('EsigibilitaIVA')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </fieldset>
            </fieldset>
            <fieldset><legend>DatiPagamento</legend><!-- Titre du fieldset -->
                <!--  INPUT CondizioniPagamento -->
                <label for="CondizioniPagamento"> CondizioniPagamento: </label>
                <input id="CondizioniPagamento" type="text" name="CondizioniPagamento" value="{{ old('CondizioniPagamento') }}" placeholder="TP01" class="@error('CondizioniPagamento') is-invalid @enderror">
                @error('CondizioniPagamento')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <fieldset><legend>DettaglioPagamento</legend><!-- Titre du fieldset -->
                    <!--  INPUT ModalitaPagamento -->
                    <label for="ModalitaPagamento"> ModalitaPagamento: </label>
                    <input id="ModalitaPagamento" type="text" name="ModalitaPagamento" value="{{ old('ModalitaPagamento') }}" placeholder="MP01" class="@error('ModalitaPagamento') is-invalid @enderror">
                    @error('ModalitaPagamento')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <!--  INPUT DataScadenzaPagamento -->
                    <label for="DataScadenzaPagamento"> DataScadenzaPagamento: </label>
                    <input id="DataScadenzaPagamento" type="text" name="DataScadenzaPagamento" value="{{ old('DataScadenzaPagamento') }}" placeholder="2017-02-18" class="@error('DataScadenzaPagamento') is-invalid @enderror">
                    @error('DataScadenzaPagamento')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <!--  INPUT ImportoPagamento -->
                    <label for="ImportoPagamento"> ImportoPagamento: </label>
                    <input id="ImportoPagamento" type="text" name="ImportoPagamento" value="{{ old('ImportoPagamento') }}" placeholder="6.10" class="@error('ImportoPagamento') is-invalid @enderror">
                    @error('ImportoPagamento')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </fieldset>
            </fieldset>
        </fieldset>
        <!--  INPUT SUBMIT BUTTON-->
        <button type="submit" name="submit" value="submit">Submit fattura</button>
    </form>

@endsection
