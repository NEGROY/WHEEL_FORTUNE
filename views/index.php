<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
  <!--  PARA la lllamda de funciones -->
  <script type="text/javascript" src="../include/js/wheel.js"></script>

  <script type="text/javascript">

var options = {
    value_set: [
        {key:'Ganador',probability: 1, description: 'Ganador', color_img:'color-1.jpg',label_img:'label-1.png'},
        {key:'Premio',probability: 1, description: 'Premio', color_img:'color-2.jpg',label_img:'label-2.png'},
        {key:'HUUY',probability: 2, description: 'HUUY', color_img:'color-1.jpg',label_img:'label-3.png'},
        {key:'Otra Vez',probability: 1, description: 'Otra Vez', color_img:'color-2.jpg',label_img:'label-4.png'},
        {key:'Ganador',probability: 0, description: 'Ganador', color_img:'color-1.jpg',label_img:'label-5.png'},
        {key:'Premio',probability: 0, description: 'Premio', color_img:'color-2.jpg',label_img:'label-6.png'}
    ],
    images: {
        base_url: 'img/',
        img_size: 400,
        select_img: 'arrow.png'

    },
    result_callback: function(throw_nr,result_key){
      alert('TIRADA No '+throw_nr+' Resultado '+result_key);
    }
};

wheel_create_here('RUEDA RUEDA!',options);

</script>
<body>

  BTN
  
  
</body>
</html>