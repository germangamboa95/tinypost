import { ApiServer } from './api';

const init = async () => {
  const server = new ApiServer();

  server.start(5555);
};

init();
