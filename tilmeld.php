<? include('top.php'); ?>	

<div class="intro">
  <p style="text-align:center;">Tilmeld dig og dine kollegaer til Videoday den 3. juni. Billetter koster 1.295 kr. og kan købes med rabat for medlemmer af Kommunikationsforum, FDIH eller FDIM.</p>
</div>

<form action="http://23company.createsend.com/t/r/s/huuyju/" method="post" id="subForm" style="text-align:center;">
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

    <tr>
      <td class="label" align="right" valign="top"><label for="Medlem">Er du medlem?</label></td>
      <td>
        <input type="radio" name="cm-fo-trqlu" id="cm210757" value="210757" onchange="if(this.checked) document.getElementById('pris').innerHTML='895';" onclick="if(this.checked) document.getElementById('pris').innerHTML='895';" /> <label  onclick="if(this.checked) document.getElementById('pris').innerHTML='895';" for="cm210757">Ja, jeg er medlem af FDIH</label><br />
        <input type="radio" name="cm-fo-trqlu" id="cm210758" value="210758" onchange="if(this.checked) document.getElementById('pris').innerHTML='895';" onclick="if(this.checked) document.getElementById('pris').innerHTML='895';" /> <label  onclick="if(this.checked) document.getElementById('pris').innerHTML='895';" for="cm210758">Ja, jeg er medlem af FDIM</label><br />
        <input type="radio" name="cm-fo-trqlu" id="cm210759" value="210759" onchange="if(this.checked) document.getElementById('pris').innerHTML='895';" onclick="if(this.checked) document.getElementById('pris').innerHTML='895';" /> <label  onclick="if(this.checked) document.getElementById('pris').innerHTML='895';" for="cm210759">Ja, jeg er medlem af Kommunikationsforum</label><br />
        <input type="radio" name="cm-fo-trqlu" id="cm210756" checked="checked" onchange="if(this.checked) document.getElementById('pris').innerHTML='1.295';" onclick="if(this.checked) document.getElementById('pris').innerHTML='1.295';" value="210756" /> <label  onclick="if(this.checked) document.getElementById('pris').innerHTML='1295';" for="cm210756">Nej, jeg er ikke medlem af organisationerne</label>
      </td>
    </tr>

    <tr>
      <td style="padding-top:12px;" class="label" align="right" valign="top"><label for="Medlem">Samlet pris:</label></td>
      <td style="padding-top:10px; font-size:1.2em;">
        <span id="pris">1.295</span> kr. + moms
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
