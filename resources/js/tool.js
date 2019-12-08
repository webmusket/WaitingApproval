Nova.booting((Vue, router, store) => {
  router.addRoutes([
    {
      name: 'waiting-approval',
      path: '/waiting-approval',
      component: require('./components/Tool'),
    },
  ])
})
