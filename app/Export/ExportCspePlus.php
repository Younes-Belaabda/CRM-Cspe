<?php

    namespace App\Export;

    use Barryvdh\DomPDF\Facade\Pdf;
    use Illuminate\Support\Facades\Mail;
    use App\Mail\cspeplus\CspeDocument1;

    // use App\Models\Contrat;

    class ExportCspePlus implements IExportContrat {

        public $contrat;
        public string $view;
        public $pdf;

        public function setView($view) : IExportContrat{
            $this->view = $view;
            return $this;
        }

        public function setContrat($contrat) : IExportContrat{
            $this->contrat = $contrat;
            return $this;
        }

        public function setPdf() : IExportContrat{
            $this->pdf = Pdf::loadView($this->view, ['contrat' => $this->contrat]);
            return $this;
        }

        public function sendMail(){
            Mail::to($this->contrat->mail)->send(new CspeDocument1($this->contrat , $this->pdf));
        }


    }

