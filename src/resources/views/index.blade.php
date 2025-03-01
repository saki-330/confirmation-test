@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form class="form">
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <div class="form__group--lastname">
                        <div class="form__input--name-lastname">
                            <input type="text" name="lastname" 
                            class="input-lastname" 
                            placeholder="例: 山田">
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述-->
                        </div>
                    </div>
                    <div class="form__group--firstname">
                        <div class="form__input--name-firstname">
                            <input type="text" name="firstname" 
                            class="input-firstname" 
                            placeholder="例: 太郎">
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <div class="form__group--gender">
                        <div class="form__input--gender">
                            <input type="radio" name="gender" value="男性" checked>男性
                            <input type="radio" name="gender" value="女性">女性
                            <input type="radio" name="gender" value="その他">その他
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form__group">
             <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="例: test@example.com">
                </div>
                <div class="form__error">
                    <!--バリデーション機能を実装したら記述-->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="tel" name="tel" placeholder="例: 080-1234-5678">
                </div>
                <div class="form__error">
                    <!--バリデーション機能を実装したら記述-->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address1" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
                </div>
                <div class="form__error">
                    <!--バリデーション機能を実装したら記述-->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address2" placeholder="例: 千駄ヶ谷マンション101">
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <select class="form__input-select">
                        <option value="">選択してください</option>
                    </select>
                </div>
                <div class="form__error">
                    <!--バリデーション機能を実装したら記述-->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="content" placeholder="お問い合わせ内容をご記載ください">
                </div>
                <div class="form__error">
                    <!--バリデーション機能を実装したら記述-->
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit">確認画面</button>
        </div>
    </form>
</div>

@endsection