import Router from '@components/router';

export default class CombinationsService {
  router: Router;

  constructor() {
    this.router = new Router();
  }

  generateAction(): string {
    return this.router.generate('admin_products_combinations_delete_combination');
  }
}
