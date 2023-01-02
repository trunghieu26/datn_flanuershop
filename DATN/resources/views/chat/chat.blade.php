<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
    integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="app">
        <div >
            <div id="container">
                <aside>
                    <header>
                        <input type="text" placeholder="search">
                    </header>
                    <ul>
                        <li>
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="">
                            <div>
                                <h2>Prénom Nom</h2>
                                <h3>
                                    <span class="status orange"></span>
                                    offline
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_02.jpg" alt="">
                            <div>
                                <h2>Prénom Nom</h2>
                                <h3>
                                    <span class="status green"></span>
                                    online
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_03.jpg" alt="">
                            <div>
                                <h2>Prénom Nom</h2>
                                <h3>
                                    <span class="status orange"></span>
                                    offline
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_04.jpg" alt="">
                            <div>
                                <h2>Prénom Nom</h2>
                                <h3>
                                    <span class="status green"></span>
                                    online
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_05.jpg" alt="">
                            <div>
                                <h2>Prénom Nom</h2>
                                <h3>
                                    <span class="status orange"></span>
                                    offline
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_06.jpg" alt="">
                            <div>
                                <h2>Prénom Nom</h2>
                                <h3>
                                    <span class="status green"></span>
                                    online
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_07.jpg" alt="">
                            <div>
                                <h2>Prénom Nom</h2>
                                <h3>
                                    <span class="status green"></span>
                                    online
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_08.jpg" alt="">
                            <div>
                                <h2>Prénom Nom</h2>
                                <h3>
                                    <span class="status green"></span>
                                    online
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_09.jpg" alt="">
                            <div>
                                <h2>Prénom Nom</h2>
                                <h3>
                                    <span class="status green"></span>
                                    online
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_10.jpg" alt="">
                            <div>
                                <h2>Prénom Nom</h2>
                                <h3>
                                    <span class="status orange"></span>
                                    offline
                                </h3>
                            </div>
                        </li>
                    </ul>
                </aside>
                <main>
                    <form id="message_form">
                        <header>
                            <div>
                                <h2>Let's talk</h2>
                                <input type="text" name="username" id="username" placeholder="Vui lòng nhập tên của bạn"> 
                            </div>
                        </header>
                        <ul id="messages">
                        </ul>
                        <footer>
                            <textarea type="text" name="message" id="message_input" placeholder="Vui lòng nhập tin nhắn mà bạn muốn gửi"></textarea>
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_picture.png" alt="">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_file.png" alt="">
                            <button type="submit" class="btn btn-primary " id=" ">Send Message <i class="far fa-paper-plane"></i></button>
                        </footer>
                    </form>
                </main>
            </div>
        </div>
    </div>
    <script src="./js/app.js"></script>
</body>
</html>