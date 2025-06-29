window.addEventListener('DOMContentLoaded', () => {
  try {
    const isReload =
      (performance.getEntriesByType('navigation')[0]?.type === 'reload') ||
      (performance.navigation && performance.navigation.type === 1);

    if (isReload) {
      const url = new URL(window.location);
      if (url.search) {
        history.replaceState(null, '', url.pathname);
      }
    }
  } catch (e) {
    console.error("Erro ao limpar URL:", e);
  }
});