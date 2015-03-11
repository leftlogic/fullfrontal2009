<h2>Free Ticket Draw</h2>

<section>
  <h3>Free ticket</h3>
  <p>If you host our WordPress Full Frontal button on your site, you can win the chance of either a <em>free ticket</em> or we'll reimburse you the full cost of the ticket you have already bought (so you can <a href="http://www.stubmatic.com/leftlogic/event/741">get your ticket now</a> <em>and still</em> have a chance of winning).</p>
  <p>We'll be picking two winners on <em>Tuesday 1<sup>st</sup> September</em> and <em>Monday 2<sup>nd</sup> November</em> and announcing them on <a href="http://twitter.com/fullfrontalconf">@fullfrontalconf</a> (and we'll email the winner directly).</p>
  <p>An example button can be seen in the <a href="#buttonexample">figure below</a></p>
</section>

<section>
  <figure id="buttonexample">
    <img src="http://2009.full-frontal.org/images/banners/" height="240" width="120" alt="Full Frontal Button to win a free ticket" />
    <header>Example button</header>
  </figure>
  <h3>How to enter</h3>
  <p>Simple: add the WordPress plugin we've written to your site, and we'll automatically enter you in to the draw.</p>
  
  <h4>Step 1: Download the plugin</h4>
  <p>Download: <a href="/ff2009.zip">ff2009.zip</a></p>
  <p>Now you need to unzip the plugin, and upload it to your <code>wp-content/plugins</code> directory in WordPress</p>
  
  <h4>Step 2: Install</h4>
  <p>The plugin works as both a widget and a normal plugin if your theme doesn't support the widget system.</p>
  
  <p>The plugin will automatically detect your blog url and email address (don't worry, this isn't shared and only used to email to let you know whether you've won). If you're using the widget system, you can change these details using the <em>edit</em> button in the widget, then hit <em>save changes</em>.</p>
  
  <p>If you're not using a widget enabled theme, enable the widget, then add the following code to the place you want the button to appear:</p>
  
  <pre><code>&lt;?php if (function_exists('full_frontal_banner')) {
  full_frontal_banner();
} ?&gt;</code></pre>
  
  <p>If you want to specify a different email address to the one that's associated with your blog, and using the plugin manually, you can do this using:</p>

  <pre><code>&lt;?php if (function_exists('full_frontal_banner')) {
  full_frontal_banner('name@domain.com');
} ?&gt;</code></pre>

  <p>If you have any problems or questions during the setup and install, just <a href="mailto:events@leftlogic.com">get in touch</a> and we'll help you out.</p>

  <h4>Step 3: Wait</h4>
  
  <p>Now it's just a waiting game. <a href="http://www.stubmatic.com/leftlogic/event/741">Grab a ticket</a> (just in case you're not oozing luck), and then keep an eye on the <a href="http://twitter.com/fullfrontalconf">Twitter account</a> and we'll announce the winners. As we said before, if you already bought a ticket, you'll have the full cost to you reimbursed.</p>
  <p><em>Good luck!</em></p>
  
</section>

<section>
  <h3>Competition Terms</h3>
  
  <ol>
    <li><small>You must be hosting the button on your site for the duration leading up to the conference. Removing the button after winning the ticket, and before the conference starts may void your ticket.</small></li>
    <li><small>As each name is drawn from the hat, we will visit the blog to validate the button is being hosted. If the button cannot be found, a new name will be selected.</small></li>
    <li><small>The button must be shown in a position that can be viewed from any number of pages, i.e. your sidebar (rather than on a single post).</small></li>
    <li><small>The ticket <em>is</em> transferable if you wish to donate it to someone else upon winning.</small></li>
    <li><small>Each winner will be announced on the dates given above, and are only valid in accordance with these terms.</small></li>
  </ol>
</section>