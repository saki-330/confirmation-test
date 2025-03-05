@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <div class="form__group--last_name">
                        <div class="form__input--name-last_name">
                            <input type="text" name="last_name" 
                            class="input-last_name" 
                            placeholder="例: 山田" value="{{ old('last_name') }}">
                        </div>
                        <div class="form__error">
                            @error('last_name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form__group--first_name">
                        <div class="form__input--name-first_name">
                            <input type="text" name="first_name" 
                            class="input-first_name" 
                            placeholder="例: 太郎" value="{{ old('first_name') }}">
                        </div>
                        <div class="form__error">
                            @error('first_name')
                            {{ $message }}
                            @enderror
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
                            <input type="radio" name="gender" class="input-gender" value="1" checked>男性
                            <input type="radio" name="gender" class="input-gender"  value="2">女性
                            <input type="radio" name="gender" class="input-gender" value="3">その他
                        </div>
                        <div class="form__error">
                            @error('gender')
                            {{ $message }}
                            @enderror
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
                    <div class="form-group__email">
                        <input type="email" name="email" class="input-email" placeholder="例: test@example.com" value="{{ old('email') }}">
                    </div>
                    <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
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
                    <div class="form-group__tel">
                        <input type="tel" class="input-tel" name="tel" placeholder="例: 08012345678" value="{{ old('tel') }}">
                    </div>
                    <div class="form__error">
                        @error('tel')
                        {{ $message }}
                        @enderror
                    </div>
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
                    <div class="form-group__address">
                        <input type="text" name="address" class="input-address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
                    </div>
                    <div class="form__error">
                        @error('address')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <div class="form-group__building">
                        <input type="text" name="building" class="input-building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}">
                    </div>
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
                    <select class="form__input--select">
                        <option value="選択してください">選択してください</option>
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
            <div class="form__group-detail">
                <div class="form__input--textarea">
                    <textarea name="detail" class="input-detail" placeholder="お問い合わせ内容をご記載ください" value="{{ old('detail') }}"></textarea>
                </div>
                <div class="form__error">
                    @error('detail')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit">確認画面</button>
        </div>
    </form>
</div>

@endsection