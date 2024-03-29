/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   error.c                                            :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: jbalestr <jbalestr@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2013/12/15 12:16:27 by jbalestr          #+#    #+#             */
/*   Updated: 2013/12/15 12:17:57 by jbalestr         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

#include "hotrace.h"
#include <string.h>

int		error(int err)
{
	ft_putendl(strerror(err));
	return (err);
}
