import { Check, Copy, type IconNode } from 'lucide';

const buttonClasses = [
    'absolute top-2 right-2 p-2 z-10',
    'bg-gray-800 border border-gray-700 rounded-md',
    'text-gray-400 cursor-pointer',
    'opacity-0 group-hover:opacity-100',
    'hover:bg-gray-700 hover:text-gray-200',
    'focus:outline-none focus:opacity-100',
    'transition-all duration-200',
].join(' ');

const svgAttrs: Record<string, string> = {
    width: '16',
    height: '16',
    viewBox: '0 0 24 24',
    fill: 'none',
    stroke: 'currentColor',
    'stroke-width': '2',
    'stroke-linecap': 'round',
    'stroke-linejoin': 'round',
};

document.querySelectorAll('pre').forEach(addCopyButton);

function addCopyButton(pre: HTMLPreElement): void {
    if (pre.querySelector('.copy-button')) return;

    const wrapper = wrapElement(pre);
    const button = createCopyButton(() => extractCode(pre));

    wrapper.appendChild(button);
}

function wrapElement(element: HTMLElement): HTMLDivElement {
    const wrapper = document.createElement('div');
    wrapper.className = 'group relative';
    element.parentNode?.insertBefore(wrapper, element);
    wrapper.appendChild(element);

    return wrapper;
}

function setAttributes(el: Element, attrs: Record<string, string | number>): void {
    Object.entries(attrs).forEach(([k, v]) => el.setAttribute(k, String(v)));
}

function createIcon(icon: IconNode, className: string): SVGSVGElement {
    const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    setAttributes(svg, { ...svgAttrs, class: className });

    icon.forEach(([tag, attrs]) => {
        const el = document.createElementNS('http://www.w3.org/2000/svg', tag);
        setAttributes(el, attrs);
        svg.appendChild(el);
    });

    return svg;
}

function createCopyButton(getText: () => string): HTMLButtonElement {
    const button = document.createElement('button');
    button.className = buttonClasses;
    button.setAttribute('aria-label', 'Copy code');

    button.appendChild(createIcon(Copy, 'copy-icon'));
    button.appendChild(createIcon(Check, 'check-icon hidden'));

    button.addEventListener('click', async () => {
        await copyToClipboard(getText(), button);
    });

    return button;
}

function extractCode(pre: HTMLPreElement): string {
    const code = pre.querySelector('code');
    if (!code) return pre.innerText;

    const lines = code.querySelectorAll('.line');
    if (lines.length === 0) return code.innerText;

    return Array.from(lines)
        .map((line) => {
            const clone = line.cloneNode(true) as HTMLElement;
            clone.querySelectorAll('.line-number').forEach((el) => el.remove());

            return clone.textContent ?? '';
        })
        .join('\n');
}

async function copyToClipboard(text: string, button: HTMLButtonElement): Promise<void> {
    try {
        await navigator.clipboard.writeText(text);
        showCopiedState(button);
    } catch (error) {
        console.error('Failed to copy:', error);
    }
}

function showCopiedState(button: HTMLButtonElement): void {
    const copyIcon = button.querySelector('.copy-icon');
    const checkIcon = button.querySelector('.check-icon');

    copyIcon?.classList.add('hidden');
    checkIcon?.classList.remove('hidden');
    button.classList.add('text-green-500');

    setTimeout(() => {
        copyIcon?.classList.remove('hidden');
        checkIcon?.classList.add('hidden');
        button.classList.remove('text-green-500');
    }, 2000);
}
