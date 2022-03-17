<?php 
  $pagename = 'Vietnamese Ky Am Keyboard Help';
  $pagetitle = $pagename;
  require_once('header.php');
?>
  <style>
    @font-face {
      font-family: "Noto Serif VN Tam Thu";
      src: url(./fonts/NotoSerifVNTamThu-Regular.ttf);
    }

    p { font: 10pt Tahoma; }
    h1 { font: bold 16pt Tahoma; color: #4444cc; margin-bottom: 2px }
    h2 { font: bold 12pt Tahoma; color: #4444cc; }

    .img-wrapper {
      width: 75%;
      min-width: 1024px;
    }
    .img-wrapper img {
      width: 100%;
      height: auto;
      border: 1px solid black;
    }

    table {
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid rgb(0, 0, 0);
      padding: 5pt 10pt;
    }
    code {
      border: 1px solid rgb(199, 199, 199);
      border-radius: 3pt;
      background: rgb(238, 238, 238);
      padding: 1pt 2pt;
    }

    .kat {
      font-family: "Noto Serif VN Tam Thu";
    }
    .kat-big {
      font-family: "Noto Serif VN Tam Thu";
      font-size: 14pt;
    }
  </style>
</head>

<p>
  Because of the complex nature of Ky Am Tu, this keyboard maps each Ky Am Tu glyph to either one single keystroke or a key sequence (consecutive keystrokes). The layout and sequences used for this keyboard is heavily influenced by <a href="https://en.wikipedia.org/wiki/Telex_(input_method)">Vietnamese Telex</a>. The tables below contain all key / key sequences for this keyboard. 
</p>

<h2>Tone markers</h2>
<table>
  <tbody>
    <tr>
      <th>Tone</th>
      <th>Keystroke</th>
      <th>Ky Am Output</th>
    </tr>
    <tr>
      <td>Ngang <span class="kat">ɥɿʕʌ</span> (flat)</td>
      <td><code>y</code></td>
      <td class="kat-big">ɥ</td>
    </tr>
    <tr>
      <td>Sắc <span class="kat">ɦɹʖʋ</span> (rising)</td>
      <td><code>s</code></td>
      <td class="kat-big">ɦ</td>
    </tr>
    <tr>
      <td>Huyền <span class="kat">ɧʂɮʘʇ</span> (falling)</td>
      <td><code>f</code></td>
      <td class="kat-big">ɧ</td>
    </tr>
    <tr>
      <td>Hỏi <span class="kat">ɨʂʗʊ</span> (dipping-rising)</td>
      <td><code>r</code></td>
      <td class="kat-big">ɨ</td>
    </tr>
    <tr>
      <td>Ngã <span class="kat">ɩɿʕ</span> (rising glottalized)</td>
      <td><code>x</code></td>
      <td class="kat-big">ɩ</td>
    </tr>
    <tr>
      <td>Nặng <span class="kat">ɪɳʖʌ</span> (falling glottalized)</td>
      <td><code>j</code></td>
      <td class="kat-big">ɪ</td>
    </tr>
  </tbody>
</table>

<h2>Initial consonants</h2>
<table>
  <tbody>
    <tr>
      <th>IPA</th>
      <th>Latin Quốc Ngữ</th>
      <th>Keystroke(s)</th>
      <th>Ky Am Output</th>
    </tr>
    <tr>
      <td>ɓ</td>
      <td>b</td>
      <td><code>b</code></td>
      <td class="kat-big">ɫ</td>
    </tr>
    <tr>
      <td>p</td>
      <td>p</td>
      <td><code>p</code></td>
      <td class="kat-big">ɬ</td>
    </tr>
    <tr>
      <td>m</td>
      <td>m</td>
      <td><code>m</code></td>
      <td class="kat-big">ɭ</td>
    </tr>
    <tr>
      <td>w</td>
      <td>-u/-o</td>
      <td><code>b</code></td>
      <td class="kat-big">ɮ</td>
    </tr>
    <tr>
      <td>f</td>
      <td>ph</td>
      <td><code>(tone marker)</code><code>f</code> or <code>shift+f</code> or <code>p</code><code>h</code></td>
      <td class="kat-big">ɯ</td>
    </tr>
    <tr>
      <td>v</td>
      <td>v</td>
      <td><code>v</code></td>
      <td class="kat-big">ɰ</td>
    </tr>
    <tr>
      <td>t</td>
      <td>t</td>
      <td><code>t</code></td>
      <td class="kat-big">ɱ</td>
    </tr>
    <tr>
      <td>tʰ</td>
      <td>th</td>
      <td><code>t</code><code>h</code></td>
      <td class="kat-big">ɲ</td>
    </tr>
    <tr>
      <td>n</td>
      <td>n</td>
      <td><code>n</code></td>
      <td class="kat-big">ɳ</td>
    </tr>
    <tr>
      <td>l</td>
      <td>l</td>
      <td><code>l</code></td>
      <td class="kat-big">ɴ</td>
    </tr>
    <tr>
      <td>ɺ</td>
      <td>r</td>
      <td><code>(tone marker)</code><code>r</code> or <code>shift+r</code></td>
      <td class="kat-big">ɵ</td>
    </tr>
    <tr>
      <td>ɗ</td>
      <td>đ</td>
      <td><code>d</code><code>d</code></td>
      <td class="kat-big">ɶ</td>
    </tr>
    <tr>
      <td>s</td>
      <td>x</td>
      <td><code>(tone marker)</code><code>x</code> or <code>shift+x</code></td>
      <td class="kat-big">ɷ</td>
    </tr>
    <tr>
      <td>z</td>
      <td>d</td>
      <td><code>d</code></td>
      <td class="kat-big">ɸ</td>
    </tr>
    <tr>
      <td>ʂ</td>
      <td>s</td>
      <td><code>(tone marker)</code><code>s</code> or <code>shift+s</code></td>
      <td class="kat-big">ɹ</td>
    </tr>
    <tr>
      <td>ʈ͡ʂ</td>
      <td>tr</td>
      <td><code>t</code><code>r</code></td>
      <td class="kat-big">ɺ</td>
    </tr>
    <tr>
      <td>c</td>
      <td>ch</td>
      <td><code>c</code></td>
      <td class="kat-big">ɻ</td>
    </tr>
    <tr>
      <td>ɲ</td>
      <td>nh</td>
      <td><code>n</code><code>h</code></td>
      <td class="kat-big">ɼ</td>
    </tr>
    <tr>
      <td>j</td>
      <td>gi</td>
      <td><code>(tone marker)</code><code>j</code> or <code>shift+j</code></td>
      <td class="kat-big">ɽ</td>
    </tr>
    <tr>
      <td>k</td>
      <td>k/c</td>
      <td><code>k</code></td>
      <td class="kat-big">ɾ</td>
    </tr>
    <tr>
      <td>ŋ</td>
      <td>ng/ngh</td>
      <td><code>n</code><code>g</code></td>
      <td class="kat-big">ɿ</td>
    </tr>
    <tr>
      <td>x</td>
      <td>kh</td>
      <td><code>k</code><code>h</code></td>
      <td class="kat-big">ʀ</td>
    </tr>
    <tr>
      <td>ɣ</td>
      <td>g/gh</td>
      <td><code>g</code></td>
      <td class="kat-big">ʁ</td>
    </tr>
    <tr>
      <td>h</td>
      <td>h</td>
      <td><code>h</code></td>
      <td class="kat-big">ʂ</td>
    </tr>
  </tbody>
</table>

<h2>Vowels</h2>
<table>
  <tbody>
    <tr>
      <th>IPA</th>
      <th>Latin Quốc Ngữ</th>
      <th>Keystroke(s)</th>
      <th>Ky Am Output</th>
    </tr>
    <tr>
      <td>i</td>
      <td>i/y</td>
      <td><code>i</code></td>
      <td class="kat-big">ʍ</td>
    </tr>
    <tr>
      <td>iə̯</td>
      <td>ia/iê/ya/yê</td>
      <td><code>i</code><code>q</code></td>
      <td class="kat-big">ʘ</td>
    </tr>
    <tr>
      <td>ɨ</td>
      <td>ư</td>
      <td><code>u</code><code>w</code></td>
      <td class="kat-big">ʎ</td>
    </tr>
    <tr>
      <td>ɨə̯</td>
      <td>ưa/ươ</td>
      <td><code>u</code><code>w</code><code>q</code> or <code>w</code><code>q</code></td>
      <td class="kat-big">ʙ</td>
    </tr>
    <tr>
      <td>u</td>
      <td>u</td>
      <td><code>u</code></td>
      <td class="kat-big">ʏ</td>
    </tr>
    <tr>
      <td>uə̯</td>
      <td>ua/uô</td>
      <td><code>u</code><code>q</code></td>
      <td class="kat-big">ʚ</td>
    </tr>
    <tr>
      <td>e</td>
      <td>ê</td>
      <td><code>e</code><code>e</code></td>
      <td class="kat-big">ʐ</td>
    </tr>
    <tr>
      <td>ə</td>
      <td>ơ/ô<sup>[1]</sup></td>
      <td><code>o</code><code>w</code></td>
      <td class="kat-big">ʑ</td>
    </tr>
    <tr>
      <td>ə̆</td>
      <td>â</td>
      <td><code>a</code><code>a</code></td>
      <td class="kat-big">ʒ</td>
    </tr>
    <tr>
      <td>o</td>
      <td>ô</td>
      <td><code>o</code><code>o</code></td>
      <td class="kat-big">ʓ</td>
    </tr>
    <tr>
      <td>ɛ</td>
      <td>e</td>
      <td><code>e</code></td>
      <td class="kat-big">ʔ</td>
    </tr>
    <tr>
      <td>a</td>
      <td>a</td>
      <td><code>a</code></td>
      <td class="kat-big">ʕ</td>
    </tr>
    <tr>
      <td>ă</td>
      <td>ă/a<sup>[2]</sup></td>
      <td><code>a</code><code>w</code></td>
      <td class="kat-big">ʖ</td>
    </tr>
    <tr>
      <td>ɔ/ăw<sup>[3]</sup></td>
      <td>o</td>
      <td><code>o</code></td>
      <td class="kat-big">ʗ</td>
    </tr>
  </tbody>
</table>

<p>
  [1], [2], [3] - See <strong>Ky Am Tu Reference</strong> below
</p>

<h2>Final consonants</h2>
<table>
  <tbody>
    <tr>
      <th>IPA</th>
      <th>Latin Quốc Ngữ</th>
      <th>Keystroke(s)</th>
      <th>Ky Am Output</th>
    </tr>
    <tr>
      <td>p</td>
      <td>p</td>
      <td><code>(vowel)</code><code>p</code> or <code>shift+p</code></td>
      <td class="kat-big">ʃ</td>
    </tr>
    <tr>
      <td>m</td>
      <td>m</td>
      <td><code>(vowel)</code><code>m</code> or <code>shift+m</code></td>
      <td class="kat-big">ʄ</td>
    </tr>
    <tr>
      <td>w</td>
      <td>-u/-o</td>
      <td><code>z</code> or <code>shift+w</code></td>
      <td class="kat-big">ʅ</td>
    </tr>
    <tr>
      <td>t</td>
      <td>t</td>
      <td><code>(vowel)</code><code>t</code> or <code>shift+t</code></td>
      <td class="kat-big">ʆ</td>
    </tr>
    <tr>
      <td>n</td>
      <td>n</td>
      <td><code>(vowel)</code><code>n</code> or <code>shift+n</code></td>
      <td class="kat-big">ʇ</td>
    </tr>
    <tr>
      <td>c</td>
      <td>ch</td>
      <td><code>(vowel)</code><code>c</code> or <code>shift+c</code></td>
      <td class="kat-big">ʈ</td>
    </tr>
    <tr>
      <td>ɲ</td>
      <td>nh</td>
      <td><code>(vowel)</code><code>n</code><code>h</code> or <code>shift+n</code><code>h</code> or <code>shift+n</code><code>shift+h</code></td>
      <td class="kat-big">ʉ</td>
    </tr>
    <tr>
      <td>j</td>
      <td>-i/-y</td>
      <td><code>(vowel)</code><code>j</code> or <code>shift+y</code></td>
      <td class="kat-big">ʊ</td>
    </tr>
    <tr>
      <td>k</td>
      <td>k/c</td>
      <td><code>(vowel)</code><code>k</code> or <code>shift+k</code></td>
      <td class="kat-big">ʋ</td>
    </tr>
    <tr>
      <td>ŋ</td>
      <td>ng</td>
      <td><code>(vowel)</code><code>n</code><code>g</code> or <code>shift+n</code><code>g</code> or <code>shift+n</code><code>shift+g</code></td>
      <td class="kat-big">ʌ</td>
    </tr>
  </tbody>
</table>

<h2>Examples</h2>
<table>
  <tbody>
    <tr>
      <th>IPA</th>
      <th>Latin Quốc Ngữ</th>
      <th>Keystroke(s)</th>
      <th>Ky Am Output</th>
    </tr>
    <tr>
      <td>kwək˦˥</td>
      <td>quốc</td>
      <td><code>s</code><code>k</code><code>w</code><code>o</code><code>w</code><code>k</code></td>
      <td class="kat-big">ɦɾɮʑʋ</td>
    </tr>
    <tr>
      <td>kuə̯k˨˩˨</td>
      <td>cuộc</td>
      <td><code>j</code><code>k</code><code>u</code><code>q</code><code>k</code></td>
      <td class="kat-big">ɪɾʚʋ</td>
    </tr>
    <tr>
      <td>ʈ͡ʂăwŋ˧</td>
      <td>trong</td>
      <td><code>y</code><code>t</code><code>r</code><code>o</code><code>n</code><code>g</code></td>
      <td class="kat-big">ɥɺʗʌ</td>
    </tr>
    <tr>
      <td>kon˧</td>
      <td>con</td>
      <td><code>y</code><code>k</code><code>o</code><code>n</code></td>
      <td class="kat-big">ɥɾʗʇ</td>
    </tr>
    <tr>
      <td>năj˧</td>
      <td>nay</td>
      <td><code>y</code><code>n</code><code>a</code><code>w</code><code>j</code></td>
      <td class="kat-big">ɥɳʖʊ</td>
    </tr>
    <tr>
      <td>măw˨˩</td>
      <td>màu</td>
      <td><code>f</code><code>m</code><code>a</code><code>w</code><code>z</code></td>
      <td class="kat-big">ɧɭʖʅ</td>
    </tr>
    <tr>
      <td>ʂaw˧˥</td>
      <td>sáo</td>
      <td><code>s</code><code>s</code><code>a</code><code>z</code></td>
      <td class="kat-big">ɦɹʕʅ</td>
    </tr>
    <tr>
      <td>ciɲ˧˥</td>
      <td>chính</td>
      <td><code>s</code><code>c</code><code>i</code><code>n</code><code>h</code></td>
      <td class="kat-big">ɦɻʍʉ</td>
    </tr>
    <tr>
      <td>cin˧˥</td>
      <td>chín</td>
      <td><code>s</code><code>c</code><code>i</code><code>n</code></td>
      <td class="kat-big">ɦɻʍʇ</td>
    </tr>
  </tbody>
</table>

<h2>Punctuation and symbols</h2>
<p>
  See <strong>Keyboard Layout Reference</strong> below
</p>

<h2>Advanced: Caps Lock mode</h2>
<p>
  When Caps Lock is on (Latin mode), this keyboard becomes a regular US English keyboard. You can now use Latin punctuation and symbols as come default on your keyboard. Additionally, to enter <a href="https://en.wikipedia.org/wiki/Halfwidth_and_fullwidth_forms">full-width Latin characters</a>, hold Ctrl+Alt or AltGr and press the desired key.
</p>
<p>
  <strong>Note:</strong> When Caps Lock is off (Ky Am mode), all numbers are in full-width form by default (except the numpad). To enter regular numerals, turn Caps Lock on.
</p>

<h1>Keyboard Layout Reference</h1>
<p>
  <div class="img-wrapper">
    <img src="keyboard_plan.png" alt="Keyboard Layout Image">
  </div>
</p>

<h1>Ky Am Tu Reference</h1>
<p>
  <div class="img-wrapper">
    <img src="kat-key.png" alt="Keyboard Layout Image">
  </div>
</p>

<hr>
<p>© 2022 Mike Vo &lt;<a href="mailto:info@miketvo.com">info@miketvo.com</a>&gt; | <a href="https://miketvo.com">miketvo.com</a></p>
