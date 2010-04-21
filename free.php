<? include('top.php'); ?>	


<div class="intro">
  <p style="text-align:center;">Tilmeld dig og dine kollegaer til Videoday den 3. juni. Arrangementet er gratis med en kuponkode fra sponsorer eller medarrangører.</p>
</div>

<script src="/md5.js"></script>

<form action="http://23company.createsend.com/t/r/s/huuyju/" method="post" id="subForm" style="text-align:center;" onsubmit="if(hex_md5(this.cm-f-trqht.value)!=='a60357fda0d9f0eef8b2041d2059b932') {alert('Du mangler at indtaste en gyldig kuponkode.'); return(false);}">
  <table cellspacing="0" cellpadding="4" border="0" style="margin:0 auto; text-align:left;">

    <tr valign="top">
      <td class="label" valign="top"><label for="name">Deltagernavn:</label></td>
      <td valign="top"><input type="text" class="text" name="cm-name" id="name" style="width:280px;" /></td>
    </tr>

    <tr valign="top">
      <td class="label" valign="top"><label for="huuyju-huuyju">Mailadresse:</label></td>
      <td valign="top"><input type="text" class="text" name="cm-huuyju-huuyju" id="huuyju-huuyju" style="width:280px;" /></td>
    </tr>

    <tr>
      <td class="label" valign="top"><label for="Company">Firma:</label></td>
      <td valign="top"><input type="text" class="text" name="cm-f-trckl" id="Company" style="width:350px;"/></td>
    </tr>

    <tr>
      <td class="label" valign="top"><label for="Address">Firmaadresse:</label></td>
      <td valign="top"><textarea name="cm-f-trckr" id="Address" style="width:353px;" rows="4" /></textarea></td>
    </tr>

    <tr valign="top">
      <td colspan="2">
        <hr/>
      </td>
    </tr>

    <tr>
      <td class="label" valign="top"><label for="cm-coupon">Din kuponkode:</label></td>
      <td valign="top"><input type="text" class="text" name="cm-f-trqht" id="Kuponkode" style="width:100px;" /></td>
    </tr>

    <tr>
      <td></td>
      <td>
        <div><small>Hvor har du fået din kuponkode fra?</small></div>
        <input type="text" class="text" name="cm-f-trqhi" id="Partner" style="width:280px;" />
      </td>
    </tr>

    <tr valign="top">
      <td colspan="2">
        <hr/>
      </td>
    </tr>


    <tr valign="top">
      <td></td>
      <td style="padding-top:5px;"><input type="image" src="/images/button-tilmeld.png"/></td>
    </tr>
  </table>
</form>

<? $signup = false; ?>
<? include('bottom.php'); ?>	
