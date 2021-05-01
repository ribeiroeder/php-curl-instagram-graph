# php-curl-instagram-graph
PHP cURL for feed Instagram Graph API

Script made based on the new (2020) Instagram API that requires authorization token generated via Facebook Developers.

<h2>Generate a token for your account</h2> 
<p>Follow the steps outlined <a href="https://www.mageplaza.com/kb/how-to-get-instagram-feed-access-token.html" target="blank">here</a></p>

<h2>How to use</h2>
<p>Include the function in your theme an edit the line with your generated token</p>

<h2>Customization and style</h2>
<p>Optional compatible CSS style is included in the files.</p>
<p>The size was configured to display 6 columns of photos, edit as needed.</p>

<h2>Notes</h2>
<p>- It does not work if you do not generate the token and authorize the application/testers.</p>
<p>- The new instagram API still has several limitations.</p>
<p>- The total number of calls your app can make per hour is 240 times the number of users. Please note this isn't a per-user limit. Any individual user can make more than 240 calls per hour, as long as the total for all users does not exceed the app maximum.</p>
<p>- Its use and consumption can be monitored on developers.facebook.com</p>
<p>- Only the 1080px image size is supported.</p>
<p>- Videos are supported! But in this script the default setting opts for the video thumbnail to avoid conflicts.</p>
<p>- Official Graph API Instagram documentation can be found <a href="https://developers.facebook.com/docs/instagram-basic-display-api/reference/media/" target="blank">here</a></p>

<h2>jQuery version</h2>
<p>If you prefer <strong>jQuery</strong>, this script follows the same concepts and classes <a href="https://github.com/ribeiroeder/jquery-feed-instagram-graph" target="blank">jQuery Ajax for feed Instagram Graph API</a></p>

<h2>Help with the tokens dilemma</h2>
<p>"Tokens are valid for 60 days and can be refreshed as long as they are at least 24 hours old but have not expired, and the app user has granted your app the instagram_graph_user_profile permission. Refreshed tokens are valid for 60 days from the date at which they are refreshed. Tokens that have not been refreshed in 60 days will expire and can no longer be refreshed." <a href="https://developers.facebook.com/docs/instagram-basic-display-api/guides/long-lived-access-tokens" target="blank">Here is the documentation</a></p>

<p><strong>Through this excerpt above we can see that we have a problem with the "non-automatic" renewal of the tokens, we cannot let it expire at risk of inactivation. With just one curl -i -X GET request, we can renew the token, so if you can help with any automated solution, it would be great!</strong></p>
