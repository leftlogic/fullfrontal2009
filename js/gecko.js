var e = "article,aside,audio,bb,canvas,datagrid,datalist,details,dialog,eventsource,figure,footer,header,hgroup,mark,menu,meter,nav,output,progress,section,time,video".split(','),
  i=e.length,
  els = {};

while (i--) {
  els[e[i]] = true;
}

$(function () {
  $.ajax({
    url: window.location.toString(),
    dataType: 'text',
    success: function (html) {
      html = html.toLowerCase();
      var bodytag = html.match(/<body.*?>/)[0];
      html = html.substring(html.indexOf(bodytag) + bodytag.length);
      html = html.substring(0, html.indexOf('</body>'));

      var open = null;
      var tomove = [];
      var index = 0;
      var tagstack = [];

      html.replace(/<(.*?)>/g, function (m, _tag) {
        var tag = _tag.replace(/\s+.*$/, '');
        
        if (tag.substr(0, 1) == '/') {
          tag = tag.substr(1);
          if (els[tag]) {
            // close out
            var tm = tomove.pop();
            console.log('to move: ', tm.children);
            // tagstack.pop();
            open = null;
          }
          // now move all those elements back inside
          console.log('--- close tag: ' + tag);
        } 
        
        if (els[tag]) {
          open = tag;
          tagstack.push(tag);
          tomove.push({tag : tag, children : []});
          console.log('--- opening unknown tag: ' + tag);
        } 
              
        if (open && _tag.substr(0, 1) != '/') {
          console.log('adding ' + tag + ' to ' + open + ' collection');
          tomove[tomove.length-1].children.push(tag);
        }
        console.log(tag);
      });
      
      // document.body.appendChild(d);
    }
  });
});