const express = require('express');
const app = express();
const port = process.env.PORT || 9000;
const hbs = require('hbs');

hbs.registerPartials(__dirname + '/views/partials');

// data
const data = {
  details: '',
  speakers: '',
  terms: 'Terms and Conditions - ',
};

app.set('views', __dirname + '/views');
app.set('view engine' ,'hbs');

Object.keys(data).forEach(name => {
  app.get(`/${name}`, (req, res) => res.render(name, { title: data[name], name }));
});

app.get('/', (req, res) => {

  res.render('speakers', {
    name: 'speakers',
    title: '',
  });
});

app.use(express.static(__dirname, + '/public'));

if (module.parent) {
  module.exports = app;
} else {
  app.listen(port, () => {
    console.log(`Express server listening on http://localhost:${port}`);
  });
}

