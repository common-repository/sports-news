<div class="wrap">
    <?php    echo "<h2>" . __( 'Sports News - Settings', 'oscimp_trdom' ) . "</h2>"; ?>
      <p><font size="4">Other Plugins by LSW: <a href="http://livescores.website/ls-go-live-scores" target="_blank">Live Scores</a> | <a href="http://livescores.website/ls-go-league-table-standings" target="_blank">League Table Standings</a></font></p>
<p>To display the news simply copy and paste the shortcode (You need to generate one below) add add it in a page/post or as a widget ( U need to drag a text widget in your sidebar and embed the shortcode for widget display ).</p>
 <p><small>NOTE: More interface sizes, colors and styles will be available soon.</small></p>
 <br />
<h2>Retrieve Sports News from Google Web Elements ( RECOMMENDED )</h2>

<body>
<form id="example" name="example">
    <p style="display:inline">Select a Country/Language:</p>
        <select id="language">
            <option value="6">English US</option>
            <option value="1">Argentinian</option>
            <option value="2">Australian</option>
            <option value="3">Austrian</option>
            <option value="4">Belgium</option>
            <option value="5">English UK</option>
          
            <option value="7">Français</option>
            <option value="8">Greek</option>
            <option value="9">Indian</option>
            <option value="10">Indonesian</option>
            <option value="11">Italian</option>
            <option value="12">Pakistan</option>
            <option value="13">Portugal</option>
            <option value="14">Spanish</option>
            <option value="15">Turkey</option>
            <option value="16">German</option>
		
    </select>
    <p style="display: inline;margin-left: 30px;">Select a sport :</p>
    <select id="sports">
        <option value="0">300x250</option>
        <option value="1">728x90</option>
    </select>

    <br />
    <p style="display: inline">Shortcode <small>(Copy and paste it where you want to display the live scores)</small>:</p>
    <input type="text" onclick="this.focus();this.select()" value="[news300x250us]" id="sensorText" />
</form>

<script type="text/javascript">
    jQuery(document).ready(function(){
        var shortcodes=[];
        for(var i=0;i<17;i++)
        {
            shortcodes[i]=[];
        }
        shortcodes[1][0]="[news300x250argentina]";
        shortcodes[1][1]="[news728x90argentina]";
        shortcodes[2][0]="[news300x250australia]";
        shortcodes[2][1]="[news728x90australia]";
        shortcodes[3][0]="[news300x250austria]";
        shortcodes[3][1]="[news728x90austria]";
        shortcodes[4][0]="[news300x250belgium]";
        shortcodes[4][1]="[news728x90belgium]";
        shortcodes[5][0]="[news300x250uk]";
        shortcodes[5][1]="[news728x90uk]";
	    shortcodes[6][0]="[news300x250us]";
        shortcodes[6][1]="[news728x90us]";
        shortcodes[7][0]="[news300x250fr]";
        shortcodes[7][1]="[news728x90fr]";
        shortcodes[8][0]="[news300x250gr]";
        shortcodes[8][1]="[news728x90gr]";
        shortcodes[9][0]="[news300x250india]";
        shortcodes[9][1]="[news728x90india]";
	    shortcodes[10][0]="[news300x250indonesia]";
        shortcodes[10][1]="[news728x90indonesia]";
        shortcodes[11][0]="[news300x250it]";
        shortcodes[11][1]="[news728x90it]";
        shortcodes[12][0]="[news300x250pakistan]";
        shortcodes[12][1]="[news728x90pakistan]";
        shortcodes[13][0]="[news300x250portugal]";
        shortcodes[13][1]="[news728x90portugal]";
	    shortcodes[14][0]="[news300x250es]";
        shortcodes[14][1]="[news728x90es]";
        shortcodes[15][0]="[news300x250tr]";
        shortcodes[15][1]="[news728x90tr]";
        shortcodes[16][0]="[news300x250de]";
        shortcodes[16][1]="[news728x90de]";

	
        var sports=[];
        for(var k=0;k<17;k++)
        {
            sports[k]=[];
        }

        sports[1][0]="300x250";
        sports[1][1]="728x90";
        sports[2][0]="300x250";
        sports[2][1]="728x90";
        sports[3][0]="300x250";
        sports[3][1]="728x90";
        sports[4][0]="300x250";
        sports[4][1]="728x90";
        sports[5][0]="300x250";
        sports[5][1]="728x90";
	    sports[6][0]="300x250";
        sports[6][1]="728x90";
        sports[7][0]="300x250";
        sports[7][1]="728x90";
        sports[8][0]="300x250";
        sports[8][1]="728x90";
        sports[9][0]="300x250";
        sports[9][1]="728x90";
	    sports[10][0]="300x250";
        sports[10][1]="728x90";
        sports[11][0]="300x250";
        sports[11][1]="728x90";
        sports[12][0]="300x250";
        sports[12][1]="728x90";
        sports[13][0]="300x250";
        sports[13][1]="728x90";
	    sports[14][0]="300x250";
        sports[14][1]="728x90";
        sports[15][0]="300x250";
        sports[15][1]="728x90";
     	sports[16][0]="300x250";
        sports[16][1]="728x90";

		
        var index_sport;
        jQuery('#language').on('change',function(){
            index_language= jQuery('#language').val();
                jQuery("#sports option").each(function(index){
                    jQuery(this).text(sports[index_language][index]);
                })
             index_sport=jQuery('#sports').val();
              jQuery('#sensorText').val(shortcodes[index_language][index_sport]);
            });
        jQuery('#sports').on('change',function(){
           index_language=jQuery('#language').val();
            index_sport=jQuery('#sports').val();
            jQuery('#sensorText').val(shortcodes[index_language][index_sport]);
        })
        });

</script>
</body>
<br />
<hr />

<h2>( If you don't want the Google News, you may want to try this! )</h2>
<p>
<body>
<form id="dailyh" name="dailyh">
        <select id="sensor1" onchange="updateText('sensor1')">
		<option name=""> ==== Alternative to Google News ==== </option>
		          <option value="[news180x110us]">Box Size 180x110 - English, USA</option>
          <option value="[news220x150us]">Box Size 220x150 - English, USA</option>
		  <option value="[news550x70us]">Box Size 550x70 - English, USA</option>
    </select>

    <br />
    <input type="text" onclick="this.focus();this.select()" value="[news180x110us]" id="sensor1Text" />
</form>

<script type="text/javascript">

function updateText(type) { 
 var id = type+'Text';
 document.getElementById(id).value = document.getElementById(type).value;
}
</script>
</body>

<hr />

<center>Please <a href="http://livescores.website/contact-us/" target="_blank">contact us</a> to ask questions, report bugs, suggest new features or give us a suggestion.</center>
<hr />

<h3>Support the plugin - Help us keep it free!</h3>
    <div class="form-group">
        <label class="col-sm-1 control-label"></label>
        <div class="col-sm-11">
            <label style="width: 100%;">

                <input type="checkbox" onclick="snwp_click_credit_link();" id="snwp_author_linking" <?php echo snwp_Main::$settings['snwp_author_linking'] == 1? 'checked':'';?>>
                Activate Author Credit Link.
            </label>
        </div>
    </div>
<p>Thank you for using our Sports News plugin.</p>
</div>
