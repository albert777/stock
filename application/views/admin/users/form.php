<div class="container"><h1 style="text-align: center">
<?php 

if (isset($users)) {
  $update_user = TRUE;
} else {
  $update_user = FALSE;
}

// This part of the GeoLine is for Update
if(isset($users)) { ?>
  <select id="rows" onchange="changeRow()" style="text-align: right;">
    <?php foreach($users as $user) { ?>
    <option value="<?php echo $user->user_id; ?>"<?php if ($user_id == $user->user_id) {echo " selected";} ?>>"<?php echo $user->username; ?>"</option>
    <?php } ?>
  </select>, <select id="actions" onchange="changeAction()">
    <option value="modify">Modification</option>
    <option value="delete">Suppression</option>
    <option value="new">Ajout</option>
  </select>, <select onchange="changeRegion()" <?php } 
  else // This one is for Create 
    { ?><a class="line-through" href="<?php echo base_url(); ?>admin/view_users"><span class="action">Ajout</span>, </a>
  <select onchange="changeNew()" <?php } ?>id="regions" style="border:none;width:205px;">
    <option value="user">Utilisateurs</option>
    <option value="tag">Tags</option>
    <option value="stocking_place">Lieux de stockage</option>
    <option value="supplier">Fournisseurs</option>
    <option value="item_group">Groupes d'objets</option>
  </select><a class="like-normal" href="<?php echo base_url(); ?>admin/">, <span class="word-administration">Administration</span></a></h1>

  <em><?php echo validation_errors(); if (isset($upload_errors)) {echo $upload_errors;} ?></em>

  <form class="container" method="post">
   <div class="form-group">
      <label for="username">Identifiant :</label>
      <input class="form-control" name="username" id="username" value="<?php if (isset($username)) {echo set_value('username',$username);} else {echo set_value('username');} ?>" />
    </div>

    <div class="form-group">
      <label for="lastname">Nom :</label>
      <input class="form-control" name="lastname" id="lastname" value="<?php if (isset($lastname)) {echo set_value('lastname',$lastname);} else {echo set_value('lastname');} ?>" />
    </div>

    <div class="form-group">
      <label for="firstname">Prénom :</label>
      <input class="form-control" name="firstname" id="firstname" value="<?php if (isset($firstname)) {echo set_value('firstname',$firstname);} else {echo set_value('firstname');} ?>" />
    </div>

    <div class="form-group">
      <label for="email">E-mail :</label>
      <input class="form-control" name="email" id="email" value="<?php if (isset($email)) {echo set_value('email',$email);} else {echo set_value('email');} ?>" type="email" />
    </div>

    <div class="form-group"><label for="user_type_id">Statut :</label>
    <select class="form-control" name="user_type_id">
      <?php foreach ($user_types as $user_type) { ?>
      <option value="<?php echo $user_type->user_type_id; ?>" <?php if(isset($user_type_id) && $user_type_id == $user_type->user_type_id) {echo "selected";} else {echo set_select('user_type_id', $user_type->user_type_id);} ?> ><?php echo $user_type->name; ?></option>
      <?php } ?>
    </select></div>

    <div class="form-group"><label for="pwd">Mot de passe<?php if ($update_user) { ?> (vide: ne rien changer)<?php } ?> :</label>
    <input class="form-control" name="pwd" id="pwd" type="password" value="<?php echo set_value('pwd'); ?>" placeholder="Au moins 6 caractères" /></div>

    <div class="form-group"><label for="pwdagain">Confirmer le mot de passe :</label>
    <input class="form-control" name="pwdagain" id="pwdagain" type="password" value="<?php echo set_value('pwdagain'); ?>" /></div>

    <div class="form-group"><label><input name="is_active" type="checkbox" value="TRUE" <?php if(isset($is_active) && $is_active == 1) {echo "checked";} else {echo set_checkbox('is_active', 'TRUE', TRUE);} ?> /> Activé</label></div>

    <button type="submit" class="btn btn-primary"><?php echo $this->lang->line('btn_submit'); ?></button>
    <a class="btn btn-primary" href="<?php echo base_url() . "admin/view_users/"; ?>"><?php echo $this->lang->line('btn_cancel'); ?></a>
  </form>

  <script src="<?php echo base_url(); ?>assets/js/geoline.js"></script>
</div>