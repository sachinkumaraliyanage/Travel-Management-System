<?php
if (!isConnect('admin')) {
	throw new Exception('{{401 - Accès non autorisé}}');
}
sendVarToJS('eqType', 'mail');
$eqLogics = eqLogic::byType('mail');
?>

<div class="row row-overflow">
    <div class="col-lg-2 col-md-3 col-sm-4">
        <div class="bs-sidebar">
            <ul id="ul_eqLogic" class="nav nav-list bs-sidenav">
                <a class="btn btn-default eqLogicAction" style="width : 100%;margin-top : 5px;margin-bottom: 5px;" data-action="add"><i class="fa fa-plus-circle"></i> {{Ajouter Email}}</a>
                <li class="filter" style="margin-bottom: 5px;"><input class="filter form-control input-sm" placeholder="{{Rechercher}}" style="width: 100%"/></li>
                <?php
foreach ($eqLogics as $eqLogic) {
	echo '<li class="cursor li_eqLogic" data-eqLogic_id="' . $eqLogic->getId() . '"><a>' . $eqLogic->getHumanName(true) . '</a></li>';
}
?>
           </ul>
       </div>
   </div>

   <div class="col-lg-10 col-md-9 col-sm-8 eqLogicThumbnailDisplay" style="border-left: solid 1px #EEE; padding-left: 25px;">
    <legend><i class="fa fa-envelope"></i>  {{Mes Mails}}
    </legend>
    <div class="eqLogicThumbnailContainer">
      <div class="cursor eqLogicAction" data-action="add" style="text-align: center; background-color : #ffffff; height : 200px;margin-bottom : 10px;padding : 5px;border-radius: 2px;width : 160px;margin-left : 10px;" >
        <i class="fa fa-plus-circle" style="font-size : 7em;color:#94ca02;"></i>
    <br>
    <span style="font-size : 1.1em;position:relative; top : 23px;word-break: break-all;white-space: pre-wrap;word-wrap: break-word;color:#94ca02">Ajouter</span>
</div>
<?php
foreach ($eqLogics as $eqLogic) {
	echo '<div class="eqLogicDisplayCard cursor" data-eqLogic_id="' . $eqLogic->getId() . '" style="text-align: center; background-color : #ffffff; height : 200px;margin-bottom : 10px;padding : 5px;border-radius: 2px;width : 160px;margin-left : 10px;" >';
	echo '<img src="plugins/mail/doc/images/mail_icon.png" height="105" width="95" />';
	echo "<br>";
	echo '<span style="font-size : 1.1em;position:relative; top : 15px;word-break: break-all;white-space: pre-wrap;word-wrap: break-word;">' . $eqLogic->getHumanName(true, true) . '</span>';
	echo '</div>';
}
?>
</div>

</div>

<div class="col-lg-10 col-md-9 col-sm-8 eqLogic" style="border-left: solid 1px #EEE; padding-left: 25px;display: none;">
    <a class="btn btn-success eqLogicAction pull-right" data-action="save"><i class="fa fa-check-circle"></i> {{Sauvegarder}}</a>
	<a class="btn btn-danger eqLogicAction pull-right" data-action="remove"><i class="fa fa-minus-circle"></i> {{Supprimer}}</a>
  	<a class="btn btn-default eqLogicAction pull-right" data-action="configure"><i class="fa fa-cogs"></i> {{Configuration avancée}}</a>
  	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation"><a href="#" class="eqLogicAction" aria-controls="home" role="tab" data-toggle="tab" data-action="returnToThumbnailDisplay"><i class="fa fa-arrow-circle-left"></i></a></li>
		<li role="presentation" class="active"><a href="#eqlogictab" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-tachometer"></i> {{Equipement}}</a></li>
		<li role="presentation"><a href="#commandtab" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-list-alt"></i> {{Commandes}}</a></li>
	</ul>
  	<div class="tab-content" style="height:calc(100% - 50px);overflow:auto;overflow-x: hidden;">
    <div role="tabpanel" class="tab-pane active" id="eqlogictab">
  	<br/>
  	<div class='row'>
        <div class="col-sm-6">
            
  			<form class="form-horizontal">
                <fieldset>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">{{Nom de l'équipement mail}}</label>
                        <div class="col-sm-6">
                            <input type="text" class="eqLogicAttr form-control" data-l1key="id" style="display : none;" />
                            <input type="text" class="eqLogicAttr form-control" data-l1key="name" placeholder="{{Nom de l'équipement mail}}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" >{{Objet parent}}</label>
                        <div class="col-sm-6">
                            <select class="eqLogicAttr form-control" data-l1key="object_id">
                                <option value="">{{Aucun}}</option>
                                <?php
									foreach (object::all() as $object) {
										echo '<option value="' . $object->getId() . '">' . $object->getName() . '</option>';
									}
								?>
                           </select>
                       </div>
                   </div>
                   <div class="form-group">
                    <label class="col-sm-4 control-label"></label>
                    <div class="col-sm-6">
                      <label class="checkbox-inline"><input type="checkbox" class="eqLogicAttr" data-l1key="isEnable" checked/>{{Activer}}</label>
                      <label class="checkbox-inline"><input type="checkbox" class="eqLogicAttr" data-l1key="isVisible" checked/>{{Visible}}</label>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">{{Nom expéditeur}}</label>
                <div class="col-sm-6">
                    <input type="text" class="eqLogicAttr form-control" data-l1key='configuration' data-l2key='fromName' />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">{{Mail expéditeur}}</label>
                <div class="col-sm-6">
                    <input type="text" class="eqLogicAttr form-control" data-l1key='configuration' data-l2key='fromMail' />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">{{Mode d'envoi}}</label>
                <div class="col-sm-6">
                    <select class="eqLogicAttr form-control" data-l1key='configuration' data-l2key='sendMode'>
                        <option value='smtp'>SMTP</option>
                        <option value='sendmail' class="expertModeVisible">Sendmail</option>
                        <option value='qmail' class="expertModeVisible">Qmail</option>
                        <option value='mail' class="expertModeVisible">Mail() [PHP fonction]</option>
                    </select>
                </div>
            </div>
        </fieldset>
    </form>
</div>
<div class="col-sm-6">
    <form class="form-horizontal">
        <fieldset>
            <div class='sendMode sendmail' style="display: none;">
                <div class="alert alert-danger">Attention cette option nécessite d'avoir correctement configurer le système (OS).</div>
            </div>
            <div class='sendMode mail' style="display: none;">
                <div class="alert alert-danger">Attention cette option nécessite d'avoir correctement configurer le système (OS).</div>
            </div>
            <div class='sendMode qmail' style="display: none;">
                <div class="alert alert-danger">Attention cette option nécessite d'avoir correctement configurer le système (OS).</div>
            </div>
            <div class='sendMode smtp' style="display: none;">
                <div class="form-group">
                    <label class="col-sm-4 control-label">{{Serveur SMTP}}</label>
                    <div class="col-sm-6">
                        <input type="text" class="eqLogicAttr form-control" data-l1key='configuration' data-l2key='smtp::server' />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">{{Port SMTP}}</label>
                    <div class="col-sm-6">
                        <input type="text" class="eqLogicAttr form-control" data-l1key='configuration' data-l2key='smtp::port' />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">{{Securité SMTP}}</label>
                    <div class="col-sm-6">
                        <select class="eqLogicAttr form-control" data-l1key='configuration' data-l2key='smtp::security'>
                            <option value=''>{{Aucune}}</option>
                            <option value='tls'>TLS</option>
                            <option value='ssl'>SSL</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">{{Uitlisateur SMTP}}</label>
                    <div class="col-sm-6">
                        <input type="text" class="eqLogicAttr form-control" data-l1key='configuration' data-l2key='smtp::username' />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">{{Mot de passe SMTP}}</label>
                    <div class="col-sm-6">
                        <input type="password" class="eqLogicAttr form-control" data-l1key='configuration' data-l2key='smtp::password' />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label"></label>
                    <div class="col-sm-6">
                     <label class="control-label"><input type="checkbox" class="eqLogicAttr" data-l1key='configuration' data-l2key='smtp::dontcheckssl' />{{Ne pas verifier le certificat SSL}}</label>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>
</div>
</div>
</div>
<div role="tabpanel" class="tab-pane" id="commandtab">	
<br/>
<a class="btn btn-success btn-sm pull-right cmdAction" data-action="add"><i class="fa fa-plus-circle"></i> {{Ajouter une commande mail}}</a><br/><br/>
<table id="table_cmd" class="table table-bordered table-condensed">
    <thead>
        <tr>
            <th>{{Nom}}</th>
            <th>{{Email}}</th>
            <th></th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>


</div>
</div>
</div>
</div>

<?php
include_file('desktop', 'mail', 'js', 'mail');
include_file('core', 'plugin.template', 'js');
?>
