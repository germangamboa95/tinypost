import { database } from '../../../configuration/database';
import { PageRecord, PAGE_TABLE } from './Page.model';
import { v4 as uuidv4 } from 'uuid';

export const findById = async (id: string): Promise<PageRecord> => {
  const [record] = await database<PageRecord>(PAGE_TABLE).where({
    id
  });

  return record;
};

export const createPage = async (page: PageRecord) => {
  const id = uuidv4();
  await database<PageRecord>(PAGE_TABLE).insert({
    ...page,
    id
  });

  const record = await findById(id);

  return record;
};

export const updatePage = async (page: PageRecord) => {
  const { id } = page;

  await database<PageRecord>(PAGE_TABLE).where({ id }).update(page);

  const record = await findById(id);

  return record;
};

export const deletePage = async (id: string) => {
  await database<PageRecord>(PAGE_TABLE).where({ id }).delete();
};
