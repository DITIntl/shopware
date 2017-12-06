/* global Shopware */

import VueAdapter from 'src/app/adapter/view/vue.adapter';
import ViewFactory from 'src/core/factory/view.factory';

/**
 * Initializes the view of the application
 *
 * @param diContainer
 * @returns {Bottle}
 */
export default function initializeView(container) {
    const adapter = VueAdapter(container.contextService);
    const viewFactory = ViewFactory(adapter);

    viewFactory.initComponents();
    return viewFactory;
}