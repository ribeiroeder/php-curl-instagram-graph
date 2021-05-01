# php-curl-instagram-graph
PHP cURL for feed Instagram Graph API

Script made based on the new (2020) Instagram API that requires authorization token generated via Facebook Developers.

<h2>Generate a token for your account</h2> 
<p>Follow the steps outlined <a href="https://www.mageplaza.com/kb/how-to-get-instagram-feed-access-token.html" target="blank">here</a></p>

<h2>How to use</h2>
<p>Include the function in your theme, edit the line with your generated token and call with</p>

```html
<div id="instagram-feed1" class="instagram_feed"></div>
```
<h2>Customization and style</h2>
Optional compatible CSS style is included in the files. Edit as needed.

<h2>Notes</h2>
<p>- The new instagram API still has several limitations.</p>
<p>- It does not work if you do not generate the token and authorize the application/testers.</p>
<p>- Only the 1080px image size is supported.</p>
<p>- Videos are supported! But in this script the default setting opts for the video thumbnail to avoid conflicts.</p>
<p>- Editions and suggestions are always welcome!</p>

<p>Official Graph API Instagram documentation can be found <a href="https://developers.facebook.com/docs/instagram-basic-display-api/reference/media/" target="blank">here</a></p>
