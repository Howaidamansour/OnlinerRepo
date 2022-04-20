<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
    rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script language="JavaScript" type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="/js/jquery-ui-personalized-1.5.2.packed.js"></script>
    <script language="JavaScript" type="text/javascript" src="/js/sprinkle.js"></script>
    <style>
                    body,
            html {
                height: 100%;
                margin: 0;
                padding: 0
            }

            .swiper-container {
                min-height: 100%
            }

            @media screen and (min-width:1240px) {
                .swiper-slide {
                    left: 7vw;
                    padding-top: 2%
                }
            }

            @media screen and (min-width:1280px) {
                .swiper-slide {
                    left: 9vw;
                    padding-top: 2%
                }
            }

            @media screen and (min-width:1366px) {
                .swiper-slide {
                    left: 14vw
                }
            }

            @media screen and (min-width:1440px) {
                .swiper-slide {
                    left: 16vw;
                    padding-top: 5%
                }
            }

            @media screen and (min-width:1600px) {
                .swiper-slide {
                    left: 22vw
                }
            }

            @media screen and (min-width:1680px) {
                .swiper-slide {
                    left: 22.5vw
                }
            }

            @media screen and (min-width:1920px) {
                .swiper-slide {
                    left: 28vw
                }
            }

            @media screen and (min-width:2560px) {
                .swiper-slide {
                    left: 36vw
                }
            }

            .card {
                position: relative;
                width: 100%;
                max-width: 1147px;
                height: 100%;
                max-height: 775px;
                border-radius: 17px;
                box-shadow: 0 30px 160px 0 rgba(0, 0, 0, .3), 0 40px 77px 0 rgba(0, 0, 0, .1);
                -ms-flex-positive: 0;
                flex-grow: 0;
                -ms-flex-negative: 1;
                flex-shrink: 1;
                -ms-flex-preferred-size: auto;
                flex-basis: auto
            }

            @media screen and (min-width:320px) {
                .card {
                    width: 100vw;
                    height: 100vh;
                    border-radius: 0;
                    box-shadow: none
                }
            }

            @media screen and (min-width:768px) {
                .card {
                    max-height: none
                }
            }

            @media screen and (min-width:1024px) {
                .card {
                    width: 100%;
                    height: 100%;
                    max-height: 775px;
                    border-radius: 17px;
                    box-shadow: 0 30px 160px 0 rgba(0, 0, 0, .3), 0 40px 77px 0 rgba(0, 0, 0, .1)
                }
            }

            .card__header {
                height: 50px;
                padding-top: 55px;
                padding-right: 57px;
                padding-left: 57px
            }

            @media screen and (min-width:320px) {
                .card__header {
                    padding-top: 10px;
                    padding-right: 15px;
                    padding-left: 15px
                }
            }

            @media screen and (min-width:1024px) {
                .card__header {
                    padding-top: 55px;
                    padding-right: 57px;
                    padding-left: 57px
                }
            }

            .card__body {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-direction: column;
                flex-direction: column;
                padding: 232px 57px 60px;
                transition: all .7s ease-in-out
            }

            @media screen and (min-width:320px) {
                .card__body {
                    padding-top: 27.5vh;
                    padding-right: 15px;
                    padding-left: 15px
                }
            }

            @media screen and (min-width:360px) {
                .card__body {
                    padding-top: 35vh
                }
            }

            @media screen and (min-width:375px) {
                .card__body {
                    padding-top: 40vh
                }
            }

            @media screen and (min-width:768px) {
                .card__body {
                    padding-top: 50vh
                }
            }

            @media screen and (min-width:1024px) {
                .card__body {
                    padding-top: 232px;
                    padding-right: 57px;
                    padding-left: 57px
                }
            }

            @media screen and (min-width:320px) {
                .card__body--faded {
                    transition: all .5s ease-in-out;
                    opacity: .2
                }
            }

            @media screen and (min-width:1240px) {
                .card__body--faded {
                    opacity: 1
                }
            }

            .card__image {
                position: absolute;
                z-index: -1;
                top: 0;
                width: 100%;
                height: 100%;
                border-radius: 17px;
                object-fit: cover
            }

            @media screen and (min-width:320px) {
                .card__image {
                    border-radius: 0
                }
            }

            @media screen and (min-width:1024px) {
                .card__image {
                    border-radius: 17px
                }
            }

            .container {
                display: -ms-flexbox;
                display: flex;
                background: linear-gradient(135deg, #e45661, #e96fb3 66%, #ec7ad6);
                background-repeat: no-repeat;
                background-attachment: fixed;
                -ms-flex-align: center;
                align-items: center;
                -ms-flex-pack: center;
                justify-content: center
            }

            .header-in-card {
                color: #fff;
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap
            }

            .header-in-card,
            .header-in-card__share-and-like {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-direction: row;
                flex-direction: row;
                -ms-flex-pack: justify;
                justify-content: space-between;
                -ms-flex-align: start;
                align-items: flex-start
            }

            .header-in-card__share-and-like .share-block {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-direction: column;
                flex-direction: column;
                margin-right: 45px;
                -ms-flex-align: center;
                align-items: center
            }

            @media screen and (min-width:320px) {
                .header-in-card__share-and-like .share-block {
                    display: none
                }
            }

            @media screen and (min-width:768px) {
                .header-in-card__share-and-like .share-block {
                    display: block
                }
            }

            @media screen and (min-width:1024px) {
                .header-in-card__share-and-like .share-block {
                    display: block
                }
            }

            .header-in-card__share-and-like .share-block__share-icon {
                position: relative;
                width: 30px;
                height: 25px;
                margin: 5px 0;
                cursor: pointer;
                transition: .5s ease-in-out;
                transform: rotate(0deg)
            }

            .header-in-card__share-and-like .share-block__share-icon span {
                position: absolute;
                display: block;
                width: 30px;
                height: 30px;
                cursor: pointer;
                transition: .25s ease-in-out;
                transform: rotate(0deg);
                opacity: 1;
                border-radius: 9px;
                background: #fff
            }

            .header-in-card__share-and-like .share-block__share-icon span:nth-child(1) {
                top: 8px;
                left: 0;
                width: 10px;
                height: 10px;
                transform-origin: left center
            }

            .header-in-card__share-and-like .share-block__share-icon span:nth-child(2) {
                top: 10px;
                left: 7px;
                width: 15px;
                height: 3px;
                transform: rotate(-30deg);
                transform-origin: left center
            }

            .header-in-card__share-and-like .share-block__share-icon span:nth-child(3) {
                top: 13px;
                left: 7px;
                width: 15px;
                height: 3px;
                transform: rotate(30deg);
                transform-origin: left center
            }

            .header-in-card__share-and-like .share-block__share-icon span:nth-child(4) {
                top: -3px;
                left: 19px;
                width: 10px;
                height: 10px;
                transform-origin: left center
            }

            .header-in-card__share-and-like .share-block__share-icon span:nth-child(5) {
                top: 19px;
                left: 19px;
                width: 10px;
                height: 10px;
                transform-origin: left center;
                border-radius: 9px
            }

            .header-in-card__share-and-like .share-block__share-icon.share-block__share-icon--is-active span:nth-child(1) {
                top: 7px;
                left: 13px;
                width: 0;
                height: 0;
                opacity: 0
            }

            .header-in-card__share-and-like .share-block__share-icon.share-block__share-icon--is-active span:nth-child(2) {
                top: 21px;
                width: 30px;
                transform: rotate(-45deg)
            }

            .header-in-card__share-and-like .share-block__share-icon.share-block__share-icon--is-active span:nth-child(3) {
                top: 0;
                width: 30px;
                transform: rotate(45deg)
            }

            .header-in-card__share-and-like .share-block__share-icon.share-block__share-icon--is-active span:nth-child(4),
            .header-in-card__share-and-like .share-block__share-icon.share-block__share-icon--is-active span:nth-child(5) {
                top: 7px;
                left: 13px;
                width: 0;
                height: 0;
                opacity: 0
            }

            .header-in-card__share-and-like .share-block__facebook-icon {
                margin-top: 0;
                transition: all .5s ease;
                opacity: 0;
                background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ4Ni4zOTIgNDg2LjM5MiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDg2LjM5MiA0ODYuMzkyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCI+CjxnPgoJPGc+CgkJPGc+CgkJCTxwYXRoIGQ9Ik0yNzMuNDQzLDE1OS4zNTRsMC4xMjItNDEuOTUxYzAtMjEuODU3LDEuNTItMzMuNTYxLDMyLjgzMS0zMy41NjFoNTcuOTQxVjBoLTgzLjAyMSAgICAgYy04MC41NTksMC05OS4xMDIsNDEuNjE3LTk5LjEwMiwxMDkuOTg1bDAuMDkxLDQ5LjM2OWwtNjEuMTMzLDAuMDN2ODMuODExaDYxLjEzM3YyNDMuMTk2aDkxLjE2OGwwLjA2MS0yNDMuMTk2bDgyLjc3OC0wLjAzICAgICBsOC45MDctODMuODExSDI3My40NDN6IiBmaWxsPSIjRkZGRkZGIi8+CgkJPC9nPgoJPC9nPgoJPGc+Cgk8L2c+Cgk8Zz4KCTwvZz4KCTxnPgoJPC9nPgoJPGc+Cgk8L2c+Cgk8Zz4KCTwvZz4KCTxnPgoJPC9nPgoJPGc+Cgk8L2c+Cgk8Zz4KCTwvZz4KCTxnPgoJPC9nPgoJPGc+Cgk8L2c+Cgk8Zz4KCTwvZz4KCTxnPgoJPC9nPgoJPGc+Cgk8L2c+Cgk8Zz4KCTwvZz4KCTxnPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=)
            }

            .header-in-card__share-and-like .share-block__facebook-icon:hover {
                cursor: pointer;
                transition: all .5s ease;
                opacity: .6
            }

            .header-in-card__share-and-like .share-block__facebook-icon--is-visible {
                position: relative;
                width: 24px;
                height: 24px;
                margin-top: 20px;
                transition: all .5s ease-in-out;
                animation-name: a;
                animation-duration: .6s;
                animation-timing-function: ease-in-out;
                opacity: 1;
                animation-fill-mode: none
            }

            .header-in-card__share-and-like .share-block__twitter-icon {
                margin-top: 0;
                transition: all .5s ease-in-out;
                opacity: 0;
                background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDYxMiA2MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDYxMiA2MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNHB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNjEyLDExNi4yNThjLTIyLjUyNSw5Ljk4MS00Ni42OTQsMTYuNzUtNzIuMDg4LDE5Ljc3MmMyNS45MjktMTUuNTI3LDQ1Ljc3Ny00MC4xNTUsNTUuMTg0LTY5LjQxMSAgICBjLTI0LjMyMiwxNC4zNzktNTEuMTY5LDI0LjgyLTc5Ljc3NSwzMC40OGMtMjIuOTA3LTI0LjQzNy01NS40OS0zOS42NTgtOTEuNjMtMzkuNjU4Yy02OS4zMzQsMC0xMjUuNTUxLDU2LjIxNy0xMjUuNTUxLDEyNS41MTMgICAgYzAsOS44MjgsMS4xMDksMTkuNDI3LDMuMjUxLDI4LjYwNkMxOTcuMDY1LDIwNi4zMiwxMDQuNTU2LDE1Ni4zMzcsNDIuNjQxLDgwLjM4NmMtMTAuODIzLDE4LjUxLTE2Ljk4LDQwLjA3OC0xNi45OCw2My4xMDEgICAgYzAsNDMuNTU5LDIyLjE4MSw4MS45OTMsNTUuODM1LDEwNC40NzljLTIwLjU3NS0wLjY4OC0zOS45MjYtNi4zNDgtNTYuODY3LTE1Ljc1NnYxLjU2OGMwLDYwLjgwNiw0My4yOTEsMTExLjU1NCwxMDAuNjkzLDEyMy4xMDQgICAgYy0xMC41MTcsMi44My0yMS42MDcsNC4zOTgtMzMuMDgsNC4zOThjLTguMTA3LDAtMTUuOTQ3LTAuODAzLTIzLjYzNC0yLjMzM2MxNS45ODUsNDkuOTA3LDYyLjMzNiw4Ni4xOTksMTE3LjI1Myw4Ny4xOTQgICAgYy00Mi45NDcsMzMuNjU0LTk3LjA5OSw1My42NTUtMTU1LjkxNiw1My42NTVjLTEwLjEzNCwwLTIwLjExNi0wLjYxMi0yOS45NDQtMS43MjFjNTUuNTY3LDM1LjY4MSwxMjEuNTM2LDU2LjQ4NSwxOTIuNDM4LDU2LjQ4NSAgICBjMjMwLjk0OCwwLDM1Ny4xODgtMTkxLjI5MSwzNTcuMTg4LTM1Ny4xODhsLTAuNDIxLTE2LjI1M0M1NzMuODcyLDE2My41MjYsNTk1LjIxMSwxNDEuNDIyLDYxMiwxMTYuMjU4eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=)
            }

            .header-in-card__share-and-like .share-block__twitter-icon:hover {
                cursor: pointer;
                transition: all .5s ease-in-out;
                opacity: .6
            }

            .header-in-card__share-and-like .share-block__twitter-icon--is-visible {
                position: relative;
                width: 24px;
                height: 24px;
                margin-top: 20px;
                transition: all .5s ease;
                animation-name: a;
                animation-duration: .6s;
                animation-timing-function: ease-in-out;
                animation-delay: .2s;
                opacity: 1;
                animation-fill-mode: none
            }

            @keyframes a {
                50% {
                    transform: translateY(140%)
                }
                to {
                    transform: translateY(0);
                    opacity: 1
                }
            }

            .header-in-card__share-and-like .like-block__like-icon {
                position: relative;
                width: 32px;
                height: 32px;
                margin-top: 3px;
                transition: all .5s ease-in-out;
                background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA0NTUgNDU1IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0NTUgNDU1OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxwYXRoIGQ9Ik0zMjYuNjMyLDEwLjM0NmMtMzguNzMzLDAtNzQuOTkxLDE3LjUzNy05OS4xMzIsNDYuOTJjLTI0LjE0MS0yOS4zODQtNjAuMzk4LTQ2LjkyLTk5LjEzMi00Ni45MiAgQzU3LjU4NiwxMC4zNDYsMCw2Ny45MzEsMCwxMzguNzE0YzAsNTUuNDI2LDMzLjA1LDExOS41MzUsOTguMjMsMTkwLjU0NmM1MC4xNjEsNTQuNjQ3LDEwNC43MjgsOTYuOTU5LDEyMC4yNTcsMTA4LjYyNmw5LjAxLDYuNzY5ICBsOS4wMS02Ljc2OGMxNS41MjktMTEuNjY3LDcwLjA5OC01My45NzgsMTIwLjI2LTEwOC42MjVDNDIxLjk0OSwyNTguMjUxLDQ1NSwxOTQuMTQxLDQ1NSwxMzguNzE0ICBDNDU1LDY3LjkzMSwzOTcuNDE0LDEwLjM0NiwzMjYuNjMyLDEwLjM0NnogTTMzNC42NjYsMzA4Ljk3NGMtNDEuMjU5LDQ0Ljk0OC04NS42NDgsODEuMjgzLTEwNy4xNjksOTguMDI5ICBjLTIxLjUyLTE2Ljc0Ni02NS45MDctNTMuMDgyLTEwNy4xNjYtOTguMDNDNjEuMjM2LDI0NC41OTIsMzAsMTg1LjcxNywzMCwxMzguNzE0YzAtNTQuMjQsNDQuMTI4LTk4LjM2OCw5OC4zNjgtOTguMzY4ICBjMzUuNjk0LDAsNjguNjUyLDE5LjQ1NCw4Ni4wMTMsNTAuNzcxbDEzLjExOSwyMy42NjZsMTMuMTE5LTIzLjY2NmMxNy4zNi0zMS4zMTYsNTAuMzE4LTUwLjc3MSw4Ni4wMTMtNTAuNzcxICBjNTQuMjQsMCw5OC4zNjgsNDQuMTI3LDk4LjM2OCw5OC4zNjhDNDI1LDE4NS43MTksMzkzLjc2MywyNDQuNTk0LDMzNC42NjYsMzA4Ljk3NHoiIGZpbGw9IiNGRkZGRkYiLz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==)
            }

            .header-in-card__share-and-like .like-block__like-icon:hover {
                cursor: pointer;
                transition: all .2s ease-in-out
            }

            .header-in-card__share-and-like .like-block__like-icon--is-visible,
            .header-in-card__share-and-like .like-block__like-icon:hover {
                background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA0NTUgNDU1IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0NTUgNDU1OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxwYXRoIGQ9Ik0zMjYuNjMyLDEwLjM0NmMtMzguNzMzLDAtNzQuOTkxLDE3LjUzNy05OS4xMzIsNDYuOTJjLTI0LjE0MS0yOS4zODMtNjAuMzk5LTQ2LjkyLTk5LjEzMi00Ni45MiAgQzU3LjU4NiwxMC4zNDYsMCw2Ny45MzEsMCwxMzguNzE0YzAsNTUuNDI2LDMzLjA0OSwxMTkuNTM1LDk4LjIzLDE5MC41NDZjNTAuMTYyLDU0LjY0OSwxMDQuNzI5LDk2Ljk2LDEyMC4yNTcsMTA4LjYyNmw5LjAxLDYuNzY5ICBsOS4wMDktNi43NjhjMTUuNTMtMTEuNjY3LDcwLjA5OS01My45NzksMTIwLjI2LTEwOC42MjVDNDIxLjk1LDI1OC4yNTEsNDU1LDE5NC4xNDEsNDU1LDEzOC43MTQgIEM0NTUsNjcuOTMxLDM5Ny40MTQsMTAuMzQ2LDMyNi42MzIsMTAuMzQ2eiIgZmlsbD0iI0Q4MDAyNyIvPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K)
            }

            .header-in-card__share-and-like .like-block__like-icon--is-visible:after {
                position: absolute;
                top: 47.5%;
                left: 50%;
                width: 50px;
                height: 50px;
                content: " ";
                transform: translate(-50%, -50%);
                animation-name: b;
                animation-duration: .5s;
                animation-timing-function: ease-in-out;
                border-radius: 50%;
                background: rgba(255, 0, 0, .3);
                box-shadow: 0 0 30px 0 rgba(255, 0, 0, .7), 0 0 30px 0 rgba(255, 0, 0, .3);
                animation-fill-mode: forwards
            }

            @keyframes b {
                0% {
                    width: 0;
                    height: 0;
                    background: rgba(255, 0, 0, 0);
                    box-shadow: 0 0 30px 0 rgba(255, 0, 0, 0), 0 0 30px 0 rgba(255, 0, 0, 0)
                }
                25% {
                    width: 50px;
                    height: 50px;
                    background: rgba(255, 0, 0, .4);
                    box-shadow: 0 0 30px 0 rgba(255, 0, 0, .7), 0 0 30px 0 rgba(255, 0, 0, .3)
                }
                to {
                    width: 75px;
                    height: 75px;
                    background: rgba(255, 0, 0, 0);
                    box-shadow: 0 0 30px 0 rgba(255, 0, 0, 0), 0 0 30px 0 rgba(255, 0, 0, 0)
                }
            }

            .menu {
                display: -ms-flexbox;
                display: flex;
                overflow: hidden;
                -ms-flex-direction: row;
                flex-direction: row;
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                -ms-flex-pack: justify;
                justify-content: space-between;
                -ms-flex-align: start;
                align-items: flex-start
            }

            @media screen and (min-width:320px) {
                .menu {
                    -ms-flex-direction: column;
                    flex-direction: column
                }
            }

            @media screen and (min-width:1240px) {
                .menu {
                    -ms-flex-direction: row;
                    flex-direction: row
                }
            }

            .menu__icon {
                position: relative;
                width: 30px;
                height: 25px;
                margin: 5px 40px 5px 0;
                cursor: pointer;
                transition: .5s ease-in-out;
                transform: rotate(0deg)
            }

            .menu__icon span {
                position: absolute;
                left: 0;
                display: block;
                width: 100%;
                height: 3px;
                transition: .25s ease-in-out;
                transform: rotate(0deg);
                opacity: 1;
                border-radius: 9px;
                background: #fff
            }

            .menu__icon span:nth-child(1) {
                top: 0;
                transform-origin: left center
            }

            .menu__icon span:nth-child(2) {
                top: 10px;
                transform-origin: left center
            }

            .menu__icon span:nth-child(3) {
                top: 20px;
                transform-origin: left center
            }

            .menu__icon.open span:nth-child(1) {
                top: 0;
                left: 8px;
                transform: rotate(45deg)
            }

            .menu__icon.open span:nth-child(2) {
                width: 0;
                opacity: 0
            }

            .menu__icon.open span:nth-child(3) {
                top: 21px;
                left: 8px;
                transform: rotate(-45deg)
            }

            .menu__item {
                visibility: hidden;
                margin-top: 5px;
                margin-right: 35px;
                padding-right: 10px;
                padding-left: 10px;
                transition: all .5s ease-in-out;
                text-decoration: none;
                text-transform: uppercase;
                letter-spacing: 3px;
                opacity: 0;
                color: transparent;
                border-bottom: 2px solid hsla(0, 0%, 100%, 0);
                text-shadow: 0 0 3px #fff;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 22px;
                font-weight: lighter;
                text-rendering: optimizeLegibility
            }

            @media screen and (min-width:320px) {
                .menu__item {
                    margin-top: 35px
                }
            }

            @media screen and (min-width:1240px) {
                .menu__item {
                    margin-top: 5px
                }
            }

            .menu__item:hover {
                transition: all .2s ease-in-out;
                color: hsla(0, 0%, 100%, .6)
            }

            .menu__item--is-visible {
                z-index: 1;
                visibility: visible;
                margin-right: 30px;
                transition: all .3s ease-in-out;
                opacity: 1;
                color: #fff;
                text-shadow: 2px 2px 5px transparent
            }

            .card-title {
                margin: 0;
                padding: 0;
                color: #fff;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 90px;
                text-rendering: optimizeLegibility
            }

            @media screen and (min-width:320px) {
                .card-title {
                    font-size: 75px
                }
            }

            @media screen and (min-width:768px) {
                .card-title {
                    font-size: 90px
                }
            }

            @media screen and (min-width:1024px) {
                .card-title {
                    font-size: 90px
                }
            }

            .card-meta {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-direction: row;
                flex-direction: row;
                margin-top: 60px;
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                -ms-flex-pack: justify;
                justify-content: space-between
            }

            @media screen and (min-width:320px) {
                .card-meta {
                    margin-top: 2vh
                }
            }

            @media screen and (min-width:768px) {
                .card-meta {
                    margin-top: 50px;
                    margin-bottom: 20px
                }
            }

            @media screen and (min-width:1024px) {
                .card-meta {
                    margin-top: 60px
                }
            }

            .card-meta__title {
                text-transform: uppercase;
                letter-spacing: 2px;
                color: #fff;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 19px;
                text-rendering: optimizeLegibility
            }

            @media screen and (min-width:320px) {
                .card-meta__title {
                    display: none
                }
            }

            @media screen and (min-width:768px) {
                .card-meta__title {
                    display: block
                }
            }

            @media screen and (min-width:1024px) {
                .card-meta__title {
                    display: block
                }
            }

            .card-meta__line {
                width: 75%;
                height: 0;
                padding-bottom: 10px;
                border-bottom: 2px solid hsla(0, 0%, 100%, .4)
            }

            @media screen and (min-width:320px) {
                .card-meta__line {
                    display: none
                }
            }

            @media screen and (min-width:768px) {
                .card-meta__line {
                    display: block;
                    width: 65%
                }
            }

            @media screen and (min-width:1024px) {
                .card-meta__line {
                    width: 70%
                }
            }

            @media screen and (min-width:1240px) {
                .card-meta__line {
                    width: 75%
                }
            }

            .card-meta__quantity {
                text-transform: uppercase;
                letter-spacing: 2px;
                color: #fff;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 19px;
                text-rendering: optimizeLegibility
            }

            @media screen and (min-width:320px) {
                .card-meta__quantity {
                    padding-left: 5px;
                    letter-spacing: 3px;
                    font-size: 12px;
                    font-weight: lighter
                }
            }

            @media screen and (min-width:768px) {
                .card-meta__quantity {
                    padding-left: 0;
                    letter-spacing: 2px;
                    font-size: 19px
                }
            }

            @media screen and (min-width:1024px) {
                .card-meta__quantity {
                    padding-left: 0;
                    letter-spacing: 2px;
                    font-size: 19px
                }
            }

            .card-tags {
                display: -ms-flexbox;
                display: flex;
                overflow: hidden;
                -ms-flex-direction: row;
                flex-direction: row;
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                -ms-flex-pack: justify;
                justify-content: space-between
            }

            @media screen and (min-width:320px) {
                .card-tags {
                    margin-top: 15px;
                    -ms-flex-wrap: wrap;
                    flex-wrap: wrap;
                    -ms-flex-pack: start;
                    justify-content: flex-start
                }
            }

            @media screen and (min-width:768px) {
                .card-tags {
                    margin-top: 0
                }
            }

            @media screen and (min-width:1024px) {
                .card-tags {
                    margin-top: 0;
                    -ms-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                    -ms-flex-pack: justify;
                    justify-content: space-between
                }
            }

            .card-tags__item {
                margin-top: 50px;
                margin-right: 10px;
                padding: 20px 45px;
                transition: all .5s ease-in-out;
                text-decoration: none;
                text-transform: uppercase;
                letter-spacing: 3px;
                color: #fff;
                border: 1px solid hsla(0, 0%, 100%, .4);
                border-radius: 10px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 22px;
                font-weight: lighter;
                text-rendering: optimizeLegibility
            }

            @media screen and (min-width:320px) {
                .card-tags__item {
                    margin-top: 2.5vh;
                    padding: 10px 25px;
                    opacity: .8;
                    font-size: 12px
                }
            }

            @media screen and (min-width:768px) {
                .card-tags__item {
                    margin-top: 20px;
                    padding: 15px 35px;
                    opacity: 1;
                    font-size: 17px
                }
            }

            @media screen and (min-width:1024px) {
                .card-tags__item {
                    margin-top: 50px;
                    padding: 20px 45px;
                    opacity: 1;
                    font-size: 22px
                }
            }

            .card-tags__item:hover {
                transition: all .2s ease-in-out;
                border: 1px solid hsla(0, 0%, 100%, .5);
                background: hsla(0, 0%, 100%, .1)
            }

    </style>
</head>


<body class="container">
    <!-- Slider main container-->
    <div class="swiper-container">
      <!-- Additional required wrapper-->
      <div class="swiper-wrapper">
        <!-- Slides-->
        <div class="swiper-slide">
          <div class="card">
            <div class="card__header">
              <div class="header-in-card">
                <div class="header-in-card__menu">
                  <div class="menu">
                    <div class="menu__icon"><span></span><span></span><span></span></div><a href="http://" target="_blank" class="menu__item">Anatomy</a><a href="http://" target="_blank" class="menu__item">Ecology</a><a href="http://" target="_blank" class="menu__item">Intelligence</a><a href="http://" target="_blank" class="menu__item">Mythology</a>
                  </div>
                </div>
                <div class="header-in-card__share-and-like">
                  <div class="share-block">
                    <div class="share-block__share-icon"><span></span><span></span><span></span><span></span><span></span></div>
                    <div class="share-block__facebook-icon"></div>
                    <div class="share-block__twitter-icon"></div>
                  </div>
                  <div class="like-block">
                    <div class="like-block__like-icon"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card__body">
              <h1 class="card-title">Dogs</h1>
              <div class="card-meta">
                <div class="card-meta__title">Tags</div>
                <div class="card-meta__line"></div>
                <div class="card-meta__quantity">22.345 images</div>
              </div>
              <div class="card-tags"><a href="#" target="_blank" class="card-tags__item">Animals</a><a href="#" target="_blank" class="card-tags__item">Dog</a><a href="#" target="_blank" class="card-tags__item">Smiling</a><a href="#" target="_blank" class="card-tags__item">Fluffy</a><a href="#" target="_blank" class="card-tags__item">Awesome</a></div>
            </div><img src="https://i.postimg.cc/NM5pYZ9X/dog.png" alt="" class="card__image">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card">
            <div class="card__header">
              <div class="header-in-card">
                <div class="header-in-card__menu">
                  <div class="menu">
                    <div class="menu__icon"><span></span><span></span><span></span></div><a href="http://" target="_blank" class="menu__item">Anatomy</a><a href="http://" target="_blank" class="menu__item">Ecology</a><a href="http://" target="_blank" class="menu__item">Intelligence</a><a href="http://" target="_blank" class="menu__item">Mythology</a>
                  </div>
                </div>
                <div class="header-in-card__share-and-like">
                  <div class="share-block">
                    <div class="share-block__share-icon"><span></span><span></span><span></span><span></span><span></span></div>
                    <div class="share-block__facebook-icon"></div>
                    <div class="share-block__twitter-icon"></div>
                  </div>
                  <div class="like-block">
                    <div class="like-block__like-icon"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card__body">
              <h1 class="card-title">Birds</h1>
              <div class="card-meta">
                <div class="card-meta__title">Tags</div>
                <div class="card-meta__line"></div>
                <div class="card-meta__quantity">13.007 images</div>
              </div>
              <div class="card-tags"><a href="#" target="_blank" class="card-tags__item">Animals</a><a href="#" target="_blank" class="card-tags__item">Bird</a><a href="#" target="_blank" class="card-tags__item">Smiling</a><a href="#" target="_blank" class="card-tags__item">Fluffy</a><a href="#" target="_blank" class="card-tags__item">Awesome</a></div>
            </div><img src="https://i.postimg.cc/1zRv78yJ/birds.png" alt="" class="card__image">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card">
            <div class="card__header">
              <div class="header-in-card">
                <div class="header-in-card__menu">
                  <div class="menu">
                    <div class="menu__icon"><span></span><span></span><span></span></div><a href="http://" target="_blank" class="menu__item">Anatomy</a><a href="http://" target="_blank" class="menu__item">Ecology</a><a href="http://" target="_blank" class="menu__item">Intelligence</a><a href="http://" target="_blank" class="menu__item">Mythology</a>
                  </div>
                </div>
                <div class="header-in-card__share-and-like">
                  <div class="share-block">
                    <div class="share-block__share-icon"><span></span><span></span><span></span><span></span><span></span></div>
                    <div class="share-block__facebook-icon"></div>
                    <div class="share-block__twitter-icon"></div>
                  </div>
                  <div class="like-block">
                    <div class="like-block__like-icon"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card__body">
              <h1 class="card-title">Cats</h1>
              <div class="card-meta">
                <div class="card-meta__title">Tags</div>
                <div class="card-meta__line"></div>
                <div class="card-meta__quantity">99.998 images</div>
              </div>
              <div class="card-tags"><a href="#" target="_blank" class="card-tags__item">Animals</a><a href="#" target="_blank" class="card-tags__item">Cat</a><a href="#" target="_blank" class="card-tags__item">Smiling</a><a href="#" target="_blank" class="card-tags__item">Fluffy</a><a href="#" target="_blank" class="card-tags__item">Awesome</a></div>
            </div><img src="https://i.postimg.cc/QtwSMS1y/cats.png" alt="" class="card__image">
          </div>
        </div>
      </div>
    </div>

    <script>
                "use strict";
        $(document).ready(function() {
            new Swiper(".swiper-container", {
                initialSlide: 1,
                spaceBetween: 100,
                speed: 600,
                loop: !1,
                effect: "coverflow",
                coverflow: {
                    rotate: 0,
                    stretch: 500,
                    depth: 300,
                    modifier: 1,
                    slideShadows: !1
                },
                slidesPerView: 1,
                slideToClickedSlide: !0,
                pagination: ".swiper-pagination",
                nextButton: ".swiper-button-next",
                prevButton: ".swiper-button-prev",
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 0
                    }
                }
            })
        }), $(document).ready(function() {
            var e = $(".share-block__share-icon"),
                i = "share-block__share-icon--is-active",
                s = ".share-block__facebook-icon",
                o = ".share-block__twitter-icon",
                t = "share-block__facebook-icon--is-visible",
                n = "share-block__twitter-icon--is-visible",
                c = $(".like-block__like-icon"),
                l = "like-block__like-icon--is-visible";
            e.click(function() {
                $(this).toggleClass(i), $(this).siblings(s).toggleClass(t), $(this).siblings(o).toggleClass(n)
            }), c.click(function() {
                $(this).toggleClass(l)
            })
        }), $(document).ready(function() {
            var e = $(".menu__icon"),
                i = "open",
                s = $(".card__body"),
                o = "card__body--faded",
                t = "menu__item--is-visible";
            e.click(function() {
                $(this).toggleClass(i), s.toggleClass(o), $(this).siblings().each(function(e) {
                    var i = this;
                    setTimeout(function() {
                        $(i).toggleClass(t)
                    }, 75 * e)
                })
            })
        });
    </script>
  </body>
    

</html>