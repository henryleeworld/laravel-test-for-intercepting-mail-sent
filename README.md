# Laravel 10 測試中途截取電子郵件寄送

引入 kirschbaum-development 的 mail-intercept 套件來擴增測試中途截取電子郵件寄送，電子郵件中途截取是一種通過截取而不是偽造電子郵件來測試郵件的新方法，因此我們可以對其進行剖析、顛倒並檢查所有內容。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 運行單元測試，主要測試非常小且能獨立於你的程式碼部分。
```sh
$ php artisan test --testsuite=Unit
```

----

## 畫面截圖
![](https://i.imgur.com/svL5bEk.png)
> 單元測試電子郵件寄送方法