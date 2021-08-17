import { ApiServer } from './api';
import { connect_mongo } from './configuration';

const init = async () => {
  connect_mongo();

  const server = new ApiServer();
  server.start(+(process.env.PORT ?? 5555));
};

init();
