(() => {
  // html/scripts/search.ts
  var searchButton = document.getElementById("site-search-button");
  var overlay = null;
  var input = null;
  var results = null;
  var rendererLoaded = false;
  var rendererLoading = null;
  function ensureOverlay() {
    if (overlay && input && results) {
      return { overlay, input, results };
    }
    overlay = document.createElement("div");
    overlay.id = "site-search-overlay";
    overlay.hidden = true;
    overlay.innerHTML = `
        <div class="site-search-dialog" role="dialog" aria-modal="true" aria-label="站内搜索">
            <form class="site-search-form" action="/search">
                <input id="site-search-input" type="search" autocomplete="off" spellcheck="false" placeholder="搜索《星际争霸 II》合作任务" aria-label="搜索《星际争霸 II》合作任务">
            </form>
            <div id="site-search-results" class="site-search-results" aria-live="polite"></div>
        </div>
    `;
    document.body.append(overlay);
    input = overlay.querySelector("#site-search-input");
    results = overlay.querySelector("#site-search-results");
    overlay.addEventListener("mousedown", (event) => {
      if (event.button === 0 && event.target === overlay)
        closeSearch();
    });
    overlay.querySelector(".site-search-form").addEventListener("submit", (event) => {
      event.preventDefault();
    });
    return { overlay, input, results };
  }
  function loadRenderer() {
    if (rendererLoaded)
      return Promise.resolve();
    if (rendererLoading)
      return rendererLoading;
    const elements = ensureOverlay();
    elements.results.innerHTML = '<p class="site-search-message">正在加载搜索……</p>';
    rendererLoading = new Promise((resolve, reject) => {
      const script = document.createElement("script");
      script.src = "/scripts/search-results.js?v=5c8c5a";
      script.async = true;
      script.onload = () => {
        if (!window.mountSearchResults) {
          reject(new Error("搜索组件未能初始化。"));
          return;
        }
        window.mountSearchResults({
          input: elements.input,
          container: elements.results,
          close: closeSearch
        });
        rendererLoaded = true;
        resolve();
      };
      script.onerror = () => reject(new Error("搜索组件加载失败。"));
      document.head.append(script);
    }).catch((error) => {
      console.error(error);
      rendererLoading = null;
      elements.results.innerHTML = '<p class="site-search-message">搜索加载失败。</p>';
    });
    return rendererLoading;
  }
  function mountRendererIfAlreadyLoaded() {
    if (!rendererLoaded || !window.mountSearchResults)
      return;
    const elements = ensureOverlay();
    window.mountSearchResults({
      input: elements.input,
      container: elements.results,
      close: closeSearch
    });
  }
  function openSearch() {
    const elements = ensureOverlay();
    elements.overlay.hidden = false;
    searchButton?.setAttribute("aria-expanded", "true");
    window.setTimeout(() => {
      elements.input.focus();
      elements.input.select();
    });
    mountRendererIfAlreadyLoaded();
    loadRenderer();
  }
  function closeSearch() {
    if (!overlay)
      return;
    overlay.hidden = true;
    searchButton?.setAttribute("aria-expanded", "false");
  }
  function isSearchOpen() {
    return !!overlay && !overlay.hidden;
  }
  var shortcutModifier = isMac() ? "Cmd" : "Ctrl";
  searchButton?.setAttribute("aria-expanded", "false");
  searchButton?.setAttribute("aria-label", `搜索（${shortcutModifier}+K）`);
  searchButton?.querySelector(".search-shortcut")?.insertAdjacentHTML("afterbegin", `<kbd>${shortcutModifier}</kbd>+<kbd>K</kbd>`);
  searchButton?.addEventListener("click", openSearch);
  document.addEventListener("keydown", (event) => {
    const noModifiers = !event.altKey && !event.shiftKey && !event.metaKey && !event.ctrlKey;
    const metaOrCtrl = !event.altKey && !event.shiftKey && event.metaKey !== event.ctrlKey;
    if (event.key.toLowerCase() === "k" && metaOrCtrl) {
      event.preventDefault();
      openSearch();
      return;
    }
    if (event.key === "Escape" && noModifiers && isSearchOpen()) {
      event.preventDefault();
      closeSearch();
    }
  });
  function isMac() {
    const platform = navigator.userAgentData?.platform || navigator.platform;
    return /mac|iphone|ipad|ipod/i.test(platform);
  }
})();

//# debugId=0F80A2A5C61BD89E64756E2164756E21
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsic2VhcmNoLnRzIl0sCiAgInNvdXJjZXNDb250ZW50IjogWwogICAgImltcG9ydCB0eXBlIHsgTW91bnRTZWFyY2hSZXN1bHRzRnVuY3Rpb24gfSBmcm9tICcuL3NlYXJjaC1yZXN1bHRzJztcblxudHlwZSBIYXNTZWFyY2ggPSB7IG1vdW50U2VhcmNoUmVzdWx0cz86IE1vdW50U2VhcmNoUmVzdWx0c0Z1bmN0aW9uIH07XG5jb25zdCBzZWFyY2hCdXR0b24gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnc2l0ZS1zZWFyY2gtYnV0dG9uJykgYXMgSFRNTEJ1dHRvbkVsZW1lbnQgfCBudWxsO1xubGV0IG92ZXJsYXk6IEhUTUxFbGVtZW50IHwgbnVsbCA9IG51bGw7XG5sZXQgaW5wdXQ6IEhUTUxJbnB1dEVsZW1lbnQgfCBudWxsID0gbnVsbDtcbmxldCByZXN1bHRzOiBIVE1MRWxlbWVudCB8IG51bGwgPSBudWxsO1xubGV0IHJlbmRlcmVyTG9hZGVkID0gZmFsc2U7XG5sZXQgcmVuZGVyZXJMb2FkaW5nOiBQcm9taXNlPHZvaWQ+IHwgbnVsbCA9IG51bGw7XG5cbmZ1bmN0aW9uIGVuc3VyZU92ZXJsYXkoKTogeyBvdmVybGF5OiBIVE1MRWxlbWVudCwgaW5wdXQ6IEhUTUxJbnB1dEVsZW1lbnQsIHJlc3VsdHM6IEhUTUxFbGVtZW50IH0ge1xuICAgIGlmIChvdmVybGF5ICYmIGlucHV0ICYmIHJlc3VsdHMpIHtcbiAgICAgICAgcmV0dXJuIHsgb3ZlcmxheSwgaW5wdXQsIHJlc3VsdHMgfTtcbiAgICB9XG5cbiAgICBvdmVybGF5ID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnZGl2Jyk7XG4gICAgb3ZlcmxheS5pZCA9ICdzaXRlLXNlYXJjaC1vdmVybGF5JztcbiAgICBvdmVybGF5LmhpZGRlbiA9IHRydWU7XG4gICAgb3ZlcmxheS5pbm5lckhUTUwgPSBgXG4gICAgICAgIDxkaXYgY2xhc3M9XCJzaXRlLXNlYXJjaC1kaWFsb2dcIiByb2xlPVwiZGlhbG9nXCIgYXJpYS1tb2RhbD1cInRydWVcIiBhcmlhLWxhYmVsPVwi56uZ5YaF5pCc57SiXCI+XG4gICAgICAgICAgICA8Zm9ybSBjbGFzcz1cInNpdGUtc2VhcmNoLWZvcm1cIiBhY3Rpb249XCIvc2VhcmNoXCI+XG4gICAgICAgICAgICAgICAgPGlucHV0IGlkPVwic2l0ZS1zZWFyY2gtaW5wdXRcIiB0eXBlPVwic2VhcmNoXCIgYXV0b2NvbXBsZXRlPVwib2ZmXCIgc3BlbGxjaGVjaz1cImZhbHNlXCIgcGxhY2Vob2xkZXI9XCLmkJzntKLjgIrmmJ/pmYXkuonpnLggSUnjgIvlkIjkvZzku7vliqFcIiBhcmlhLWxhYmVsPVwi5pCc57Si44CK5pif6ZmF5LqJ6Zy4IElJ44CL5ZCI5L2c5Lu75YqhXCI+XG4gICAgICAgICAgICA8L2Zvcm0+XG4gICAgICAgICAgICA8ZGl2IGlkPVwic2l0ZS1zZWFyY2gtcmVzdWx0c1wiIGNsYXNzPVwic2l0ZS1zZWFyY2gtcmVzdWx0c1wiIGFyaWEtbGl2ZT1cInBvbGl0ZVwiPjwvZGl2PlxuICAgICAgICA8L2Rpdj5cbiAgICBgO1xuICAgIGRvY3VtZW50LmJvZHkuYXBwZW5kKG92ZXJsYXkpO1xuXG4gICAgaW5wdXQgPSBvdmVybGF5LnF1ZXJ5U2VsZWN0b3I8SFRNTElucHV0RWxlbWVudD4oJyNzaXRlLXNlYXJjaC1pbnB1dCcpITtcbiAgICByZXN1bHRzID0gb3ZlcmxheS5xdWVyeVNlbGVjdG9yPEhUTUxFbGVtZW50PignI3NpdGUtc2VhcmNoLXJlc3VsdHMnKSE7XG5cbiAgICBvdmVybGF5LmFkZEV2ZW50TGlzdGVuZXIoJ21vdXNlZG93bicsIGV2ZW50ID0+IHtcbiAgICAgICAgaWYgKGV2ZW50LmJ1dHRvbiA9PT0gMCAmJiBldmVudC50YXJnZXQgPT09IG92ZXJsYXkpIGNsb3NlU2VhcmNoKCk7XG4gICAgfSk7XG4gICAgb3ZlcmxheS5xdWVyeVNlbGVjdG9yPEhUTUxGb3JtRWxlbWVudD4oJy5zaXRlLXNlYXJjaC1mb3JtJykhLmFkZEV2ZW50TGlzdGVuZXIoJ3N1Ym1pdCcsIGV2ZW50ID0+IHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICB9KTtcblxuICAgIHJldHVybiB7IG92ZXJsYXksIGlucHV0LCByZXN1bHRzIH07XG59XG5cbmZ1bmN0aW9uIGxvYWRSZW5kZXJlcigpOiBQcm9taXNlPHZvaWQ+IHtcbiAgICBpZiAocmVuZGVyZXJMb2FkZWQpIHJldHVybiBQcm9taXNlLnJlc29sdmUoKTtcbiAgICBpZiAocmVuZGVyZXJMb2FkaW5nKSByZXR1cm4gcmVuZGVyZXJMb2FkaW5nO1xuXG4gICAgY29uc3QgZWxlbWVudHMgPSBlbnN1cmVPdmVybGF5KCk7XG4gICAgZWxlbWVudHMucmVzdWx0cy5pbm5lckhUTUwgPSAnPHAgY2xhc3M9XCJzaXRlLXNlYXJjaC1tZXNzYWdlXCI+5q2j5Zyo5Yqg6L295pCc57Si4oCm4oCmPC9wPic7XG4gICAgcmVuZGVyZXJMb2FkaW5nID0gbmV3IFByb21pc2U8dm9pZD4oKHJlc29sdmUsIHJlamVjdCkgPT4ge1xuICAgICAgICBjb25zdCBzY3JpcHQgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdzY3JpcHQnKTtcbiAgICAgICAgc2NyaXB0LnNyYyA9ICcvc2NyaXB0cy9zZWFyY2gtcmVzdWx0cy5qcyc7XG4gICAgICAgIHNjcmlwdC5hc3luYyA9IHRydWU7XG4gICAgICAgIHNjcmlwdC5vbmxvYWQgPSAoKSA9PiB7XG4gICAgICAgICAgICBpZiAoISh3aW5kb3cgYXMgSGFzU2VhcmNoKS5tb3VudFNlYXJjaFJlc3VsdHMpIHtcbiAgICAgICAgICAgICAgICByZWplY3QobmV3IEVycm9yKCfmkJzntKLnu4Tku7bmnKrog73liJ3lp4vljJbjgIInKSk7XG4gICAgICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICAgICAgfVxuICAgICAgICAgICAgKHdpbmRvdyBhcyBIYXNTZWFyY2gpLm1vdW50U2VhcmNoUmVzdWx0cyEoe1xuICAgICAgICAgICAgICAgIGlucHV0OiBlbGVtZW50cy5pbnB1dCxcbiAgICAgICAgICAgICAgICBjb250YWluZXI6IGVsZW1lbnRzLnJlc3VsdHMsXG4gICAgICAgICAgICAgICAgY2xvc2U6IGNsb3NlU2VhcmNoLFxuICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICByZW5kZXJlckxvYWRlZCA9IHRydWU7XG4gICAgICAgICAgICByZXNvbHZlKCk7XG4gICAgICAgIH07XG4gICAgICAgIHNjcmlwdC5vbmVycm9yID0gKCkgPT4gcmVqZWN0KG5ldyBFcnJvcign5pCc57Si57uE5Lu25Yqg6L295aSx6LSl44CCJykpO1xuICAgICAgICBkb2N1bWVudC5oZWFkLmFwcGVuZChzY3JpcHQpO1xuICAgIH0pLmNhdGNoKGVycm9yID0+IHtcbiAgICAgICAgY29uc29sZS5lcnJvcihlcnJvcik7XG4gICAgICAgIHJlbmRlcmVyTG9hZGluZyA9IG51bGw7XG4gICAgICAgIGVsZW1lbnRzLnJlc3VsdHMuaW5uZXJIVE1MID0gJzxwIGNsYXNzPVwic2l0ZS1zZWFyY2gtbWVzc2FnZVwiPuaQnOe0ouWKoOi9veWksei0peOAgjwvcD4nO1xuICAgIH0pO1xuICAgIHJldHVybiByZW5kZXJlckxvYWRpbmc7XG59XG5cbmZ1bmN0aW9uIG1vdW50UmVuZGVyZXJJZkFscmVhZHlMb2FkZWQoKTogdm9pZCB7XG4gICAgaWYgKCFyZW5kZXJlckxvYWRlZCB8fCAhKHdpbmRvdyBhcyBIYXNTZWFyY2gpLm1vdW50U2VhcmNoUmVzdWx0cykgcmV0dXJuO1xuICAgIGNvbnN0IGVsZW1lbnRzID0gZW5zdXJlT3ZlcmxheSgpO1xuICAgICh3aW5kb3cgYXMgSGFzU2VhcmNoKS5tb3VudFNlYXJjaFJlc3VsdHMhKHtcbiAgICAgICAgaW5wdXQ6IGVsZW1lbnRzLmlucHV0LFxuICAgICAgICBjb250YWluZXI6IGVsZW1lbnRzLnJlc3VsdHMsXG4gICAgICAgIGNsb3NlOiBjbG9zZVNlYXJjaCxcbiAgICB9KTtcbn1cblxuZnVuY3Rpb24gb3BlblNlYXJjaCgpOiB2b2lkIHtcbiAgICBjb25zdCBlbGVtZW50cyA9IGVuc3VyZU92ZXJsYXkoKTtcbiAgICBlbGVtZW50cy5vdmVybGF5LmhpZGRlbiA9IGZhbHNlO1xuICAgIHNlYXJjaEJ1dHRvbj8uc2V0QXR0cmlidXRlKCdhcmlhLWV4cGFuZGVkJywgJ3RydWUnKTtcbiAgICB3aW5kb3cuc2V0VGltZW91dCgoKSA9PiB7XG4gICAgICAgIGVsZW1lbnRzLmlucHV0LmZvY3VzKCk7XG4gICAgICAgIGVsZW1lbnRzLmlucHV0LnNlbGVjdCgpO1xuICAgIH0pO1xuICAgIG1vdW50UmVuZGVyZXJJZkFscmVhZHlMb2FkZWQoKTtcbiAgICB2b2lkIGxvYWRSZW5kZXJlcigpO1xufVxuXG5mdW5jdGlvbiBjbG9zZVNlYXJjaCgpOiB2b2lkIHtcbiAgICBpZiAoIW92ZXJsYXkpIHJldHVybjtcbiAgICBvdmVybGF5LmhpZGRlbiA9IHRydWU7XG4gICAgc2VhcmNoQnV0dG9uPy5zZXRBdHRyaWJ1dGUoJ2FyaWEtZXhwYW5kZWQnLCAnZmFsc2UnKTtcbn1cblxuZnVuY3Rpb24gaXNTZWFyY2hPcGVuKCk6IGJvb2xlYW4ge1xuICAgIHJldHVybiAhIW92ZXJsYXkgJiYgIW92ZXJsYXkuaGlkZGVuO1xufVxuXG5jb25zdCBzaG9ydGN1dE1vZGlmaWVyID0gaXNNYWMoKSA/ICdDbWQnIDogJ0N0cmwnO1xuc2VhcmNoQnV0dG9uPy5zZXRBdHRyaWJ1dGUoJ2FyaWEtZXhwYW5kZWQnLCAnZmFsc2UnKTtcbnNlYXJjaEJ1dHRvbj8uc2V0QXR0cmlidXRlKCdhcmlhLWxhYmVsJywgYOaQnOe0ou+8iCR7c2hvcnRjdXRNb2RpZmllcn0rS++8iWApO1xuc2VhcmNoQnV0dG9uPy5xdWVyeVNlbGVjdG9yPEhUTUxFbGVtZW50PignLnNlYXJjaC1zaG9ydGN1dCcpPy5pbnNlcnRBZGphY2VudEhUTUwoJ2FmdGVyYmVnaW4nLCBgPGtiZD4ke3Nob3J0Y3V0TW9kaWZpZXJ9PC9rYmQ+KzxrYmQ+Szwva2JkPmApO1xuc2VhcmNoQnV0dG9uPy5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIG9wZW5TZWFyY2gpO1xuXG5kb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdrZXlkb3duJywgZXZlbnQgPT4ge1xuICAgIGNvbnN0IG5vTW9kaWZpZXJzID0gIWV2ZW50LmFsdEtleSAmJiAhZXZlbnQuc2hpZnRLZXkgJiYgIWV2ZW50Lm1ldGFLZXkgJiYgIWV2ZW50LmN0cmxLZXk7XG4gICAgY29uc3QgbWV0YU9yQ3RybCA9ICFldmVudC5hbHRLZXkgJiYgIWV2ZW50LnNoaWZ0S2V5ICYmIGV2ZW50Lm1ldGFLZXkgIT09IGV2ZW50LmN0cmxLZXk7XG5cbiAgICBpZiAoZXZlbnQua2V5LnRvTG93ZXJDYXNlKCkgPT09ICdrJyAmJiBtZXRhT3JDdHJsKSB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgIG9wZW5TZWFyY2goKTtcbiAgICAgICAgcmV0dXJuO1xuICAgIH1cbiAgICBpZiAoZXZlbnQua2V5ID09PSAnRXNjYXBlJyAmJiBub01vZGlmaWVycyAmJiBpc1NlYXJjaE9wZW4oKSkge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICBjbG9zZVNlYXJjaCgpO1xuICAgIH1cbn0pO1xuXG5mdW5jdGlvbiBpc01hYygpOiBib29sZWFuIHtcbiAgICBjb25zdCBwbGF0Zm9ybSA9IChuYXZpZ2F0b3IgYXMgYW55KS51c2VyQWdlbnREYXRhPy5wbGF0Zm9ybSB8fCBuYXZpZ2F0b3IucGxhdGZvcm07XG4gICAgcmV0dXJuIC9tYWN8aXBob25lfGlwYWR8aXBvZC9pLnRlc3QocGxhdGZvcm0pO1xufVxuIgogIF0sCiAgIm1hcHBpbmdzIjogIjs7RUFHQSxJQUFNLGVBQWUsU0FBUyxlQUFlLG9CQUFvQjtBQUFBLEVBQ2pFLElBQUksVUFBOEI7QUFBQSxFQUNsQyxJQUFJLFFBQWlDO0FBQUEsRUFDckMsSUFBSSxVQUE4QjtBQUFBLEVBQ2xDLElBQUksaUJBQWlCO0FBQUEsRUFDckIsSUFBSSxrQkFBd0M7QUFBQSxFQUU1QyxTQUFT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
