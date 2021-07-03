<h1>Makerslab Open Status Plugin - Settings</h1>
<p>This plugin is used to connect to the open/close button api and display the realtime status on the makerslab.be webpage.</p>

<br class="clear" />

<form method="post" action="">
    <input type="hidden" name="mklabbe_openstatus_apisave_submitted" value="Y" />
    <table class="form-table">
        <tr>
            <th class="row-title">
            API Settings
            </th>
        </tr>
        <tr valign="top">
            <td scope="row">
                <label for="txt-apiurl">API-URL:</label>
                <input type="text" id="txt-apiurl" name="mklabbe_openstatus_txtapiurl" value="https://dev.nealjoos.be/deshack/openstatus/api.json" class="regular-text" />
                <input class="button-primary" type="submit" name="save-api" value="Save API URL" />
            </td>
        </tr>
    </table>
</form>

<br class="clear" />