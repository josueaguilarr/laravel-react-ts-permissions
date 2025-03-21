import { SharedData } from '@/types';
import { usePage } from '@inertiajs/react';
import { PropsWithChildren } from 'react';

type Props = {
    permission?: string | undefined;
} & PropsWithChildren;

export const Can = ({ permission, children }: Props) => {
    const { auth } = usePage<SharedData>().props;

    if (permission === undefined) return children; 

    return <>{auth?.user.permissions.includes(permission) && children}</>;
};
