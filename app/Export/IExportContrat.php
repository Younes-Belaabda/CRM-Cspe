<?php

    namespace App\Export;

    interface IExportContrat {
        public function setView($view) : IExportContrat;
        public function setContrat($contrat) : IExportContrat;
        public function setPdf() : IExportContrat;
        public function sendMail();
    }
