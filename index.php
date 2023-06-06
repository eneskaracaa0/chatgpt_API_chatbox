<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

  <style>
    body{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
       background-color: #f9f9fa;
    }
    .container{
      
        justify-content:center;
        max-height: 80%;
        padding: 12px 20px;
        width: 500px;
       
    }
    .media-chat{
        display: block;
        padding: 8px 10px;
        margin: 6px 0;
        background-color: #f5f6f7;
        border: 1px solid #41414120;
        border-radius: 6px;
        color: #414141;
        font-weight: 400;
        
    }
   .media-chat-reverse{
    background-color: #7c84cf;
    color:white;
   }
   .publisher{
    position: relative;
    display: flex;
    align-items: center;
    padding: 4px 6px;
    background-color: #41414120;
   }
   .chat-input{
    border: none;
    flex-grow: 1;
    outline: none;
    height: 100%;
    padding: 5px 6px;
   }
   .chat-box{
    overflow-y:scroll;
    height:450px ;
   }


  </style>

  <div class="container">
    <div class="card">
        <div class="card-header">
            <span>Chatgpt &enes karaca</span>
        </div>
        <div class="p-4 chat-box" id="chat-box">

        <div class="media-chat">
            <p>
               <b>AI:</b> Merhaba Nasıl Yardımcı Olabilirim
            </p>
        </div>

         <!-- <div class="media-chat media-chat-reverse">
            <p>
              <b>Human:</b>  Merhaba Nasıl Yardımcı Olabilirim
            </p>
        </div>  -->
        



        </div>
        <div class="publisher border-ligth">
            <input type="text" id="input-msg" class="chat-input" placeholder="Mesaj Giriniz..">
            <button class="btn btn-primary btn-sum" id="send-btn">Gönder</button>
        </div>
    </div>
  </div>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
  </body>
</html>