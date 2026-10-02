(() => {
    const header = document.querySelector('.site-header');
    const navigation = header?.querySelector('.main-nav');
    if (!navigation) return;

    const compactViewport = window.matchMedia('(width < 1000px)');
    const panel = document.createElement('div');
    panel.className = 'nav-drawer-panel';
    panel.id = 'navigation-panel';

    const toggle = document.createElement('button');
    toggle.type = 'button';
    toggle.className = 'nav-toggle';
    toggle.setAttribute('aria-label', 'Open navigation');
    toggle.setAttribute('aria-controls', panel.id);
    toggle.setAttribute('aria-expanded', 'false');
    for (let index = 0; index < 3; index += 1) {
        const line = document.createElement('span');
        line.setAttribute('aria-hidden', 'true');
        toggle.append(line);
    }

    const topbar = document.createElement('div');
    topbar.className = 'nav-drawer-topbar';
    const title = document.createElement('span');
    title.id = 'navigation-title';
    title.textContent = 'Navigation';
    const close = document.createElement('button');
    close.type = 'button';
    close.className = 'nav-close';
    close.setAttribute('aria-label', 'Close navigation');
    const closeIcon = document.createElement('span');
    closeIcon.setAttribute('aria-hidden', 'true');
    closeIcon.textContent = '\u00d7';
    close.append(closeIcon);
    topbar.append(title, close);

    const backdrop = document.createElement('div');
    backdrop.className = 'nav-backdrop';
    backdrop.setAttribute('aria-hidden', 'true');

    navigation.before(toggle, panel);
    panel.append(topbar, navigation);
    header.append(backdrop);
    header.classList.add('nav-enhanced');

    let isOpen = false;
    let backgroundStates = [];

    function restoreBackground() {
        for (const { element, inert } of backgroundStates) element.inert = inert;
        backgroundStates = [];
    }

    function setOpen(nextOpen, restoreFocus = true) {
        isOpen = compactViewport.matches && nextOpen;
        header.classList.toggle('nav-is-open', isOpen);
        document.documentElement.classList.toggle('nav-open', isOpen);
        toggle.setAttribute('aria-expanded', String(isOpen));
        toggle.setAttribute('aria-label', isOpen ? 'Close navigation' : 'Open navigation');
        restoreBackground();

        if (compactViewport.matches) {
            panel.inert = !isOpen;
            panel.setAttribute('aria-hidden', String(!isOpen));
            if (isOpen) {
                panel.setAttribute('role', 'dialog');
                panel.setAttribute('aria-modal', 'true');
                panel.setAttribute('aria-labelledby', title.id);
                backgroundStates = [...document.body.children]
                    .filter(element => element !== header && element.tagName !== 'SCRIPT')
                    .map(element => ({ element, inert: element.inert }));
                for (const { element } of backgroundStates) element.inert = true;
                close.focus({ preventScroll: true });
            } else {
                panel.removeAttribute('role');
                panel.removeAttribute('aria-modal');
                panel.removeAttribute('aria-labelledby');
                if (restoreFocus) toggle.focus();
            }
        } else {
            panel.inert = false;
            panel.removeAttribute('aria-hidden');
            panel.removeAttribute('role');
            panel.removeAttribute('aria-modal');
            panel.removeAttribute('aria-labelledby');
            if (document.activeElement === close) navigation.querySelector('a')?.focus();
        }
    }

    toggle.addEventListener('click', () => setOpen(!isOpen));
    close.addEventListener('click', () => setOpen(false));
    backdrop.addEventListener('click', () => setOpen(false));
    navigation.addEventListener('click', event => {
        if (isOpen && event.target.closest('a[href]')) setOpen(false, false);
    });

    document.addEventListener('keydown', event => {
        if (!isOpen) return;
        if (event.key === 'Escape') {
            event.preventDefault();
            setOpen(false);
        } else if (event.key === 'Tab') {
            const controls = [...panel.querySelectorAll('a[href], button:not(:disabled)')];
            const first = controls[0];
            const last = controls[controls.length - 1];
            if (!panel.contains(document.activeElement)) {
                event.preventDefault();
                first.focus();
            } else if (event.shiftKey && document.activeElement === first) {
                event.preventDefault();
                last.focus();
            } else if (!event.shiftKey && document.activeElement === last) {
                event.preventDefault();
                first.focus();
            }
        }
    });

    compactViewport.addEventListener('change', () => setOpen(false, false));
    setOpen(false, false);
})();
