import Vue from 'vue'
import Router from 'vue-router'

import Index from './pages/Index'
import Blank from './pages/Blank'

Vue.use(Router)

const routes = [
    { path: '/', component: Index, name: 'index'},
    { path: '/blank', component: Blank, name: 'blank'},
]

const router = new Router({ mode: 'history', routes })

/*router.beforeEach((to, from, next) => {

    if (!to.meta.middleware) {
        return next()
    }

    const middleware = to.meta.middleware
    const context = {
        to,
        from,
        next,
        store
    }

    return middleware[0]({
        ...context,
        next: middlewarePipeline(context, middleware, 1)
    })
})*/


export default router
