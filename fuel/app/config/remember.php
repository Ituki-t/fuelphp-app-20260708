<?php


return array(
    /**
     * cookie_name - ログイン状態を保持するためのクッキーの名前
     */
    'cookie_name' => 'remember_token',

    /**
    * ログイン状態を保持するためのクッキーの有効期限（秒単位）
     */
    'cookie_expiration' => 60 * 60 * 24 * 30, // 30 days

);