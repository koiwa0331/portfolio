// UEL をコピーするボタン
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.copy-url-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
      var parent = this.closest('.copy-url-block');
      // 既存のクリップボードコピー処理
      navigator.clipboard.writeText(parent.dataset.url);
      var tooltip = parent.querySelector('.copy-url-tooltip');
      // アニメーション付与
      // リセット
      tooltip.classList.remove('animateable');
      // 再描画を強制してアニメーションをリスタート
      void tooltip.offsetWidth;
      tooltip.classList.add('animateable');
    });
  });
});
