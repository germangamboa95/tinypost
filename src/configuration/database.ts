import mongoose from 'mongoose';
import knex from 'knex';
const config = require('../knexfile.js')['development'];

export const database = knex(config);

export const connect_mongo = () => {};
