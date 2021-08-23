import { database } from '../../../configuration/database';

import { v4 as uuidv4 } from 'uuid';
import { UserRecord, USER_TABLE } from './User.model';

export const findById = async (id: string): Promise<UserRecord> => {
    const [record] = await database<UserRecord>(USER_TABLE).where({
        id
    });

    return record;
};

export const findByUsername = async (username: string) => {

    const [record] = await database<UserRecord>(USER_TABLE).where({
        username
    });

    return record;

}

export const createUser = async (user: UserRecord) => {
    const id = uuidv4();
    await database<UserRecord>(USER_TABLE).insert({
        ...user,
        id
    });

    const record = await findById(id);

    return record;
};

export const updateUser = async (user: UserRecord) => {
    const { id } = user;

    if (!id) {
        throw new Error(`Id is missing`);
    }

    await database<UserRecord>(USER_TABLE).where({ id }).update(user);

    const record = await findById(id);

    return record;
};

export const deleteUser = async (id: string) => {
    await database<UserRecord>(USER_TABLE).where({ id }).delete();
};
