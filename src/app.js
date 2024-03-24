import express from 'express';
import axios from 'axios';

const app = express();

app.use(express.urlencoded({extended: false}));
app.use(express.json());


app.get('/api/users', async (req, res) => {
  const {username, password} = req.params;

  try {
    const response = await axios.get(`https://petstore3.swagger.io/api/v3/user/login?username=${username}wdadwa&password=${password}`);

    res.status(200).json({
      success: true,
      message: response.data
    });

  } catch (err) {
    res.status(err.response.status).json({
      success: false,
      message: err.response.statusText
    });
  }
});


app.post('/api/stores', async (req, res) => {
  const petData = req.body;

  try {
    const response = await axios.post('https://petstore3.swagger.io/api/v3/store/order', petData);


    res.status(201).json({
      success: true,
      message: response.data
    });

  } catch (err) {
    res.status(err.response.status).json({
      success: false,
      message: err.response.statusText
    });
  }
});


app.use((req, res, next) => {
  res.status(404).json({
    message: 'Not Found'
  })
});


app.listen(3000);