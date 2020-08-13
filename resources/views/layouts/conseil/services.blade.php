<div class="row bg-light-grey pb-5" id="services">
    <div class="col-10 col-md-8 offset-1 offset-md-2 pr-md-5 pr-1">
        <div class="title w-100 w-md-50 mt-5 pt-5 pr-0 pr-md-5 mb-5">
            <span class="muli-bold">Nos services</span>
            <span class="pretty"> de <br>conseil {{$conseil->certification}}</span>
        </div>
    </div>  
    <div class='col-10 col-md-4 offset-md-2 offset-1 mb-5 pb-5'>
        <div class="text px-2 gray muli">
            Nous sommes convaincus de la simplicité pour obtenir la certification {{$conseil->certification}} et nos consultants {{$conseil->certification}} vous
            guideront pas à pas tout au long du processus.
            <br><br>
            Envoyez-nous votre formulaire de demande et un consultant vous répondra dans les 24 heures.
        </div>
    </div>
    <div class='col-10  col-md-4 mb-5 pb-5 d-none d-md-flex'>
        <div class="text px-2 gray muli">
            Nous organiserons une consultation gratuite pour nous assurer de bien comprendre votre demande et 
            nous vous fournirons un prix fixe et sans frais cachés pour votre accompagnement.
            <br><br>
            Une fois notre offre acceptée, les travaux de mise en œuvre de votre système de management de la qualité {{$conseil->certification}} commenceront.
        </div>
    </div>

    <div class="col-md-6 list-left px-3 pr-4 muli-extra-bold mt-5 d-none d-md-block" id="list">
        <div class="row ">
            <div class="col-md-2 number gray py-3 text-center">01</div>
            <div class="col-md-9 content  py-3">Analyse initiale des écarts</div>
        </div>
        <div class="row">
            <div class="col-md-2 number py-3 text-center">02</div>
            <div class="col-md-9 content border-top py-3">Formation de sensibilisation à {{$conseil->certification}}</div>
        </div>
        <div class="row ">
            <div class="col-md-2 number py-3 text-center">03</div>
            <div class="col-md-9 content border-top py-3">Création d’une politique qualité</div>
        </div>
        <div class="row ">
            <div class="col-md-2 number py-3 text-center">04</div>
            <div class="col-md-9 content border-top py-3">Cartographie des processus, création <br>de procédures et de documents</div>
        </div>
        <div class="row ">
            <div class="col-md-2 number py-3 text-center">05</div>
            <div class="col-md-9 content border-top py-3">Mettre en place un système de contrôle et de<br>conservation des documents et des<br>enregistrements</div>
        </div>
    </div>
    <div class="col-md-6 list-right px-3 pr-4 muli-extra-bold mt-5 d-none d-md-block" id="list">
        <div class="row ">
            <div class="col-md-2 number gray py-3 text-center">06</div>
            <div class="col-md-9 content  py-3">Mettre en place un système de surveillance et<br>de résolution des non-conformités</div>
        </div>
        <div class="row">
            <div class="col-md-2 number py-3 text-center">07</div>
            <div class="col-md-9 content border-top py-3">Mettre en place un programme de formation</div>
        </div>
        <div class="row ">
            <div class="col-md-2 number py-3 text-center">08</div>
            <div class="col-md-9 content border-top py-3">Définition des objectifs et satisfaction du client</div>
        </div>
        <div class="row ">
            <div class="col-md-2 number py-3 text-center">09</div>
            <div class="col-md-9 content border-top py-3">Mettre en place un programme d’audit</div>
        </div>
        <div class="row ">
            <div class="col-md-2 number py-3 text-center">10</div>
            <div class="col-md-9 content border-top py-3">Maintenance du système qualité</div>
        </div>
        <div class="row ">
            <div class="col-md-2 number py-3 text-center">11</div>
            <div class="col-md-9 content border-top py-3">Audits internes, des fournisseurs</div>
        </div>
    </div>
</div>

<div class="row py-3 px-0 pt-5 bg-light-grey d-none d-md-flex" id="timeline">
    <div class="col text-center border-top pl-5">
        <div class="timeline-elt  position-relative">
            <div class="round"></div>
            <div class="number">1</div>
            <div class="subtitle text-left mt-5 h4 pretty">
                <b class="muli-bold">Formation</b><br>
                des employés
            </div>
            <div class="content text-left text">
                Une fois le système mis en place, nos consultants {{$conseil->certification}} fourniront une formation à vos employés pour que tout le monde connaisse et comprenne le nouveau système de gestion de la qualité.
            </div>
        </div>
    </div>
    <div class="col text-center border-top">
        <div class="timeline-elt  position-relative">
            <div class="round"></div>
            <div class="number">2</div>
            <div class="subtitle text-left mt-5 h4 pretty">
                <b class="muli-bold">Audits</b><br>
                internes
            </div>
            <div class="content text-left text">
                2 à 3 mois après la mise en œuvre, l’un de nos consultants en qualité effectuera des audits internes pour vérifier l’efficacité du système.
            </div>
        </div>
    </div>
    <div class="col text-center border-top">
        <div class="timeline-elt  position-relative">
            <div class="round"></div>
            <div class="number">3</div>
            <div class="subtitle text-left mt-5 h4 pretty">
                <b class="muli-bold">Rencontre</b><br>
                de la direction
            </div>
            <div class="content text-left text">
                Une fois que les résultats des audits internes sont disponibles, nous rencontrons la direction pour un examen de l’ensemble du système.
            </div>
        </div>
    </div>
    <div class="col text-center border-top">
        <div class="timeline-elt  position-relative">
            <div class="round"></div>
            <div class="number">4</div>
            <div class="subtitle text-left mt-5 h4 pretty">
                <b class="muli-bold">Évaluation</b><br>
                externe
            </div>
            <div class="content text-left text">
                Nous organiserions une évaluation externe par un organisme certificateur.
            </div>
        </div>
    </div>
    <div class="col text-center border-top border-blue">
        <div class="timeline-elt  position-relative">
            <div class="round bg-blue blue"></div>
            <div class="number blue">5</div>
            <div class="subtitle text-left mt-5 h4 pretty blue">
                <b class="muli-bold blue">Certification</b><br>
                {{$conseil->certification}}
            </div>
            <div class="content text-left text blue">
            À la fin, vous recevrez votre certification {{$conseil->certification}} que vous pourrez promouvoir auprès de vos clients
            </div>
        </div>
    </div>
</div>

<div class="row py-3 px-0 pt-5 bg-light-grey d-md-none" id="timeline-mobile">
    <div class="offset-1 col-11 text-center border-left">
        <div class="timeline-elt  position-relative">
            <div class="round"></div>
            <div class="number">1</div>
            <div class="subtitle text-left mt-5 h4 pretty">
                <b class="muli-bold">Formation</b><br>
                des employés
            </div>
            <div class="content text-left text">
                Une fois le système mis en place, nos consultants {{$conseil->certification}} fourniront une formation à vos employés pour que tout le monde connaisse et comprenne le nouveau système de gestion de la qualité.
            </div>
        </div>
    </div>
    <div class="offset-1 col-11 text-center border-left">
        <div class="timeline-elt  position-relative">
            <div class="round"></div>
            <div class="number">2</div>
            <div class="subtitle text-left mt-5 h4 pretty">
                <b class="muli-bold">Audits</b><br>
                internes
            </div>
            <div class="content text-left text">
                2 à 3 mois après la mise en œuvre, l’un de nos consultants en qualité effectuera des audits internes pour vérifier l’efficacité du système.
            </div>
        </div>
    </div>
    <div class="offset-1 col-11 text-center border-left">
        <div class="timeline-elt  position-relative">
            <div class="round"></div>
            <div class="number">3</div>
            <div class="subtitle text-left mt-5 h4 pretty">
                <b class="muli-bold">Rencontre</b><br>
                de la direction
            </div>
            <div class="content text-left text">
                Une fois que les résultats des audits internes sont disponibles, nous rencontrons la direction pour un examen de l’ensemble du système.
            </div>
        </div>
    </div>
    <div class="offset-1 col-11 text-center border-left">
        <div class="timeline-elt  position-relative">
            <div class="round"></div>
            <div class="number">4</div>
            <div class="subtitle text-left mt-5 h4 pretty">
                <b class="muli-bold">Évaluation</b><br>
                externe
            </div>
            <div class="content text-left text">
                Nous organiserions une évaluation externe par un organisme certificateur.
            </div>
        </div>
    </div>
    <div class="offset-1 col-11 text-center border-left border-blue">
        <div class="timeline-elt  position-relative">
            <div class="round bg-blue blue"></div>
            <div class="number blue">5</div>
            <div class="subtitle text-left mt-5 h4 pretty blue">
                <b class="muli-bold blue">Certification</b><br>
                {{$conseil->certification}}
            </div>
            <div class="content text-left text blue">
            À la fin, vous recevrez votre certification {{$conseil->certification}} que vous pourrez promouvoir auprès de vos clients
            </div>
        </div>
    </div>

</div>