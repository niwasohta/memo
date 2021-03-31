<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
   </head>
   <body>
      <form action="/posts" method="POST">
        @csrf
        <div class="problem">
        <p>課題</p>
        <p><textarea name="post[problem]" cols="50" rows="5"></textarea></p>
        </div>
        <div class="solution">
        <p>解決</p>
        <p><textarea name="post[solution]" cols="50" rows="5"></textarea></p>
        </div>
        <div class="information">
        <p>連絡</p>
        <p><textarea name="post[information]" cols="50" rows="5"></textarea></p>
        </div>
        <p>分類</p>
        <div class="problemcategory">
        <p>問題種別</p>
          <select name="post[problemcategory]">
            <option value="未設定">未設定</option>
            <option value="勤怠">勤怠</option>
            <option value="教務">教務</option>
            <option value="電話応対">電話応対</option>
            <option value="書類作成">書類作成</option>
            <option value="マネジメント">マネジメント</option>
            <option value="コミュニケーション">コミュニケーション</option>
            <option value="その他">その他</option>
          </select>
        </p>
        </div>
        <div class="problempriority">
        <p>重要度</p>
          <select name="post[problempriority]">
            <option value="未設定">未設定</option>
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select>
        </p>
        </div>
        <div class="problemfeatures">
        <p>特徴</p>
          <select name="post[problemfeatures]">
           <option value="未設定">未設定</option>
            <option value="できないとかなり怒られる">できないとかなり怒られる</option>
            <option value="できないとみんなに迷惑がかかる">できないとみんなに迷惑がかかる</option>
            <option value="できると褒められる">できると褒められる</option>
            <option value="できると仕事が楽になる">できると仕事が楽になる</option>
            <option value="できる人が少ない">できる人が少ない</option>
            <option value="忘れやすい">忘れやすい</option>
            <option value="よく使う">よく使う</option>
            <option value="結構悩んでいる">結構悩んでいる</option>
            <option value="緊急">緊急</option>
          </select>
        </p>
        </div>
        <p><input type="submit" name="submitBtn" value="送信"></p>
      </form>
    </body>
</html>